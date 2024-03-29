/**
 * Рендер Российской карты.
 *
 * Перед подключением этой библиотеки должна быть подключена библиотека RaphelJS:
 *
 * @see http://dmitrybaranovskiy.github.io/raphael/
 *
 * Состав опций:
 * - mapId - идентификатор элемента, в котором будет срендерена карта
 * - width - ширина карты
 * - height - высота карты
 * - defaultAttr - дефолтовые атрибуты полигона
 * - mouseMoveAttr - атрибуты для полигона при наведении мышки
 * - onMouseMove - событие при наведении мышки на регион
 * - onMouseOut - событие при убирании мышки с региона
 * - onMouseClick - событие при клике
 * - viewPort - смещение координат в SVG
 * - viewSize - видимые границы в SVG
 *
 * @param {Object} options Опции
 * @param {Array} regions Регионы, каждый элемент состоит из:
 *  ident - идентификатора,
 *  name - названия,
 *  attr - необязательное, атрибуты, которые будут перекрывать атрибуты по умолчанию,
 *  moveAttr - необязательное, атрибуты, которые будут перекрывать атрибуты при наведении,
 *  paths - массив атрибутов path
 *  polygons - массив атрибутов polygon
 */
var RussianMap = function(options, regions) {
    var mapId = options.mapId;
    var width = options.width;
    var height = options.height;
    var viewPort = options.viewPort || '0 0 1134 620';
    var viewSize = options.viewSize || '700 700';

    // канва для рисования регионов
    var R = Raphael(mapId, width, height, viewPort, viewSize);

    // дефолтовые атрибуты для контуров регионов
    var defaultAttr = options.defaultAttr || {
        fill: '#d8d8d8', // цвет которым закрашивать
        stroke: '#ffffff', // цвет границы
        'stroke-width': 1, // ширина границы
        'stroke-linejoin': 'round' // скруглять углы
    };

    // атрибуты для контуров регионов при событии onMouseMove
    var mouseMoveAttr = options.mouseMoveAttr || {
        fill: '#25669e'
    };

    /**
     * Событие onMouseMove для path или polygon внутри контекста полигона (можно использовать this).
     */
    var onMouseMove = function(event) {
        var region = this.region;
        // установить всем полигонам в регионе дефолтовые атрибуты
        if (region.paths !== undefined) {
            for (var p in region.paths) {
                region.paths[p].attr(region.moveAttr || mouseMoveAttr);
            }
        }
        if (region.polygons !== undefined) {
            for (var p in region.polygons) {
                region.polygons[p].attr(region.moveAttr || mouseMoveAttr);
            }
        }
        if (options.onMouseMove) {
            options.onMouseMove.call(this, event);
        }
    };

    /**
     * Событие при клике на полигон
     */
    var onMouseClick = function(event) {
        if (options.onMouseClick) {
            var region = this.region;
            options.onMouseClick.call(this, event);
        }
    }

    /**
     * Событие onMouseOut для path или polygon внутри контекста полигона (можно использовать this)
     */
    var onMouseOut = function(event) {
        var region = this.region;
        // установить всем полигонам в регионе дефолтовые атрибуты
        if (region.paths !== undefined) {
            for (var p in region.paths) {
                region.paths[p].attr(region.attr || defaultAttr);
            }
        }
        if (region.polygons !== undefined) {
            for (var p in region.polygons) {
                region.polygons[p].attr(region.attr || defaultAttr);
            }
        }
        if (options.onMouseOut) {
            options.onMouseOut.call(this, event);
        }
    };

    /**
     * Рендер региона
     * @param R
     * @param region
     */
    var renderRegion = function(region) {
        // прорисовка многоугольников
        if (region.paths !== undefined) {
            for (var p in region.paths) {
                var path = R.path(region.paths[p]).attr(region.attr || defaultAttr);
                path.region = region;
                path.mouseover(onMouseMove);
                path.mouseout(onMouseOut);
                path.click(onMouseClick);
                region.paths[p] = path;
            }
        }

        // прорисовка полигнов: также через тег path, только конечная точка соединяется с начальной
        if (region.polygons !== undefined) {
            for (var p in region.polygons) {
                var polygon = R.path('M' + region.polygons[p]).attr(region.attr || defaultAttr);
                polygon.region = region;
                polygon.mouseover(onMouseMove);
                polygon.mouseout(onMouseOut);
                polygon.click(onMouseClick);
                region.polygons[p] = polygon;
            }
        }
        if (region.citys !== undefined) {
            console.log(region.citys);
            for (var c in region.citys) {
                console.log(c, region.citys[c]);
                var coordArr = region.citys[c].split(' ');
                var dot = R.circle(coordArr[1], coordArr[0], 3).attr({
                    "fill": "#ff6c32",
                    "stroke": "#ff6c32",
                    "stroke-width": 1
                });
            }
        }
    };

    for (var i in regions) {
        renderRegion(regions[i]);
    }

    this.regions = regions;
};
