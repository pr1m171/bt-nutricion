!(function (e, o) {
    "object" == typeof exports && "object" == typeof module
        ? (module.exports = o(require("moment"), require("fullcalendar")))
        : "function" == typeof define && define.amd
        ? define(["moment", "fullcalendar"], o)
        : "object" == typeof exports
        ? o(require("moment"), require("fullcalendar"))
        : o(e.moment, e.FullCalendar);
})("undefined" != typeof self ? self : this, function (e, o) {
    return (function (e) {
        function o(n) {
            if (r[n]) return r[n].exports;
            var t = (r[n] = { i: n, l: !1, exports: {} });
            return e[n].call(t.exports, t, t.exports, o), (t.l = !0), t.exports;
        }
        var r = {};
        return (
            (o.m = e),
            (o.c = r),
            (o.d = function (e, r, n) {
                o.o(e, r) || Object.defineProperty(e, r, { configurable: !1, enumerable: !0, get: n });
            }),
            (o.n = function (e) {
                var r =
                    e && e.__esModule
                        ? function () {
                              return e.default;
                          }
                        : function () {
                              return e;
                          };
                return o.d(r, "a", r), r;
            }),
            (o.o = function (e, o) {
                return Object.prototype.hasOwnProperty.call(e, o);
            }),
            (o.p = ""),
            o((o.s = 121))
        );
    })({
        0: function (o, r) {
            o.exports = e;
        },
        1: function (e, r) {
            e.exports = o;
        },
        121: function (e, o, r) {
            Object.defineProperty(o, "__esModule", { value: !0 }), r(122);
            var n = r(1);
            n.datepickerLocale("es", "es", {
                closeText: "Cerrar",
                prevText: "&#x3C;Ant",
                nextText: "Sig&#x3E;",
                currentText: "Hoy",
                monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                monthNamesShort: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                dayNames: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
                dayNamesShort: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
                dayNamesMin: ["D", "L", "M", "X", "J", "V", "S"],
                weekHeader: "Sm",
                dateFormat: "dd/mm/yy",
                firstDay: 1,
                isRTL: !1,
                showMonthAfterYear: !1,
                yearSuffix: "",
            }),
                n.locale("es", { buttonText: { month: "Mes", week: "Semana", day: "Día", list: "Agenda" }, allDayHtml: "Horas", eventLimitText: "más", noEventsMessage: "No hay eventos para mostrar" });
        },
        122: function (e, o, r) {
            !(function (e, o) {
                o(r(0));
            })(0, function (e) {
                var o = "Enero_Febrero_Marzo_Abril_Mayo_Junio_Julio_Agosto_Septiembre_Octubre_Noviembre_Diciembre".split("_"),
                    r = "ene_feb_mar_abr_may_jun_jul_ago_sep_oct_nov_dic".split("_"),
                    n = [/^ene/i, /^feb/i, /^mar/i, /^abr/i, /^may/i, /^jun/i, /^jul/i, /^ago/i, /^sep/i, /^oct/i, /^nov/i, /^dic/i],
                    t = /^(enero|febrero|marzo|abril|mayo|junio|julio|agosto|septiembre|octubre|noviembre|diciembre|ene\.?|feb\.?|mar\.?|abr\.?|may\.?|jun\.?|jul\.?|ago\.?|sep\.?|oct\.?|nov\.?|dic\.?)/i;
                return e.defineLocale("es", {
                    months: "Enero_Febrero_Marzo_Abril_Mayo_Junio_Julio_Agosto_Septiembre_Octubre_Noviembre_Diciembre".split("_"),
                    monthsShort: function (e, n) {
                        return e ? (/-MMM-/.test(n) ? r[e.month()] : o[e.month()]) : o;
                    },
                    monthsRegex: t,
                    monthsShortRegex: t,
                    monthsStrictRegex: /^(enero|febrero|marzo|abril|mayo|junio|julio|agosto|septiembre|octubre|noviembre|diciembre)/i,
                    monthsShortStrictRegex: /^(ene\.?|feb\.?|mar\.?|abr\.?|may\.?|jun\.?|jul\.?|ago\.?|sep\.?|oct\.?|nov\.?|dic\.?)/i,
                    monthsParse: n,
                    longMonthsParse: n,
                    shortMonthsParse: n,
                    weekdays: "domingo_lunes_martes_miércoles_jueves_viernes_sábado".split("_"),
                    weekdaysShort: "Domingo_Lunes_Martes_Miércoles_Jueves_Viernes_Sábado".split("_"),
                    weekdaysMin: "do_lu_ma_mi_ju_vi_sá".split("_"),
                    weekdaysParseExact: !0,
                    longDateFormat: { LT: "H:mm", LTS: "H:mm:ss", L: "DD/MM/YYYY", LL: "D [de] MMMM [de] YYYY", LLL: "D [de] MMMM [de] YYYY H:mm", LLLL: "dddd, D [de] MMMM [de] YYYY H:mm" },
                    calendar: {
                        sameDay: function () {
                            return "[hoy a la" + (1 !== this.hours() ? "s" : "") + "] LT";
                        },
                        nextDay: function () {
                            return "[mañana a la" + (1 !== this.hours() ? "s" : "") + "] LT";
                        },
                        nextWeek: function () {
                            return "dddd [a la" + (1 !== this.hours() ? "s" : "") + "] LT";
                        },
                        lastDay: function () {
                            return "[ayer a la" + (1 !== this.hours() ? "s" : "") + "] LT";
                        },
                        lastWeek: function () {
                            return "[el] dddd [pasado a la" + (1 !== this.hours() ? "s" : "") + "] LT";
                        },
                        sameElse: "L",
                    },
                    relativeTime: {
                        future: "en %s",
                        past: "hace %s",
                        s: "unos segundos",
                        ss: "%d segundos",
                        m: "un minuto",
                        mm: "%d minutos",
                        h: "una hora",
                        hh: "%d horas",
                        d: "un día",
                        dd: "%d días",
                        M: "un mes",
                        MM: "%d meses",
                        y: "un año",
                        yy: "%d años",
                    },
                    dayOfMonthOrdinalParse: /\d{1,2}º/,
                    ordinal: "%dº",
                    week: { dow: 1, doy: 4 },
                    invalidDate: "Fecha invalida",
                });
            });
        },
    });
});
