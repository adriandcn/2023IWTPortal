function GetDataAjaxSearchTotApp(e) {
    $(".moreImg").LoadingOverlay("show"), $(".moreImg").each(function () {
        this.style.pointerEvents = "none"
    });
    var a = $(".pagina").val();
    $.ajax({
        type: "GET",
        url: e,
        data: {
            page: a
        },
        dataType: "json",
        success: function (e) {
            window.current_pageSet = current_pageSet + 1;
            var a = [];
            $(e.SearchTotalPartial).each(function () {
                var e = $(this).html();
                a.push(e)
            }), itemsHTML = $.map(a, function (e) {
                return e
            });
            var o = $(itemsHTML.join(""));
            $(function () {
                var e = $(".SearchTotalPartial1");
                sjq(e).imagesLoaded(function () {
                    sjq(e).isotope({
                        masonry: {
                            columnWidth: 100
                        }
                    }), sjq(o).imagesLoaded(function () {
                        sjq(e).append(o).isotope("appended", o).isotope("layout")
                    })
                })
            }), $(".SearchTotalPartial1").LoadingOverlay("hide", !0), $(".moreImg").LoadingOverlay("hide", !0), $(".moreImg").each(function () {
                this.style.pointerEvents = "auto"
            })
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function RenderBooking(e, a) {
    var o, n = "/booking/" + a;
    console.log(n), $.ajax({
        type: "GET",
        url: n,
        data: "",
        success: function (e) {
            console.log(e), window.open(e.redirecto, "_blank").focus();
        },
        error: function (e) {
            o = JSON.parse(e.responseText), window.open(o.redirectto, "_blank");
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxSearchTotal(e) {
    $(".SearchTotalPartial1").LoadingOverlay("show"), $.ajax({
        type: "GET",
        url: e,
        data: {
            page: window.current_pageSet + 1
        },
        dataType: "json",
        success: function (e) {
            0 == window.current_pageSet && $(".SearchTotalPartial1").html(""), window.current_pageSet = current_pageSet + 1;
            var a = [];
            $(e.SearchTotalPartial).each(function () {
                var e = $(this).html();
                a.push(e)
            }), itemsHTML = $.map(a, function (e) {
                return e
            });
            var o = $(itemsHTML.join(""));
            $(function () {
                var e = $(".SearchTotalPartial1");
                sjq(e).imagesLoaded(function () {
                    sjq(e).isotope({
                        masonry: {
                            columnWidth: 100
                        }
                    }), sjq(o).imagesLoaded(function () {
                        sjq(e).append(o).isotope("appended", o).isotope("layout")
                    })
                })
            }), $(".SearchTotalPartial1").LoadingOverlay("hide", !0)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function masonryBlocks(e, a) {
    var o = $("." + e),
        n = $("." + a);
    sjq(o).imagesLoaded(function () {
        sjq(o).isotope({
            itemSelector: "." + a,
            percentPosition: !0,
            masonry: {
                columnWidth: "." + a
            }
        }), sjq(n).imagesLoaded(function () {
            sjq(o).append(n).isotope("appended", n).isotope("layout")
        })
    })
}

function GetDataAjaxTopPlacesOld(e) {
    $.ajax({
        type: "GET",
        url: e,
        data: {
            page: window.current_page + 1
        },
        dataType: "json",
        success: function (e) {
            window.current_page = current_page + 1;
            var a = [];
            $(e.topPlaces).each(function () {
                var e = $(this).html();
                a.push(e)
            }), itemsHTML = $.map(a, function (e) {
                return e
            });
            var o = $(itemsHTML.join(""));
            $(function () {
                var e = $(".topPlaces");
                sjq(e).imagesLoaded(function () {
                    sjq(e).isotope({
                        masonry: {
                            columnWidth: 100
                        }
                    }), sjq(o).imagesLoaded(function () {
                        sjq(e).append(o).isotope("appended", o).isotope("layout")
                    })
                })
            }), $(".moreImagesTop").LoadingOverlay("hide", !0)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxTopPlaces(e) {
    $.ajax({
        type: "GET",
        url: e,
        data: {
            page: window.current_page + 1
        },
        dataType: "json",
        success: function (e) {
            window.current_page = current_page + 1, $(".topPlaces").html(e.topPlaces), startCarousels()
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxTopPlacesLocation(e, a) {
    $.ajax({
        type: "GET",
        url: e,
        data: {
            page: window.current_page + 1
        },
        dataType: "json",
        success: function (e) {
            window.current_page = current_page + 1;
            var o = $(a),
                n = [];
            $(e.topPlaces).each(function () {
                var e = $.trim($(this).html());
                null != e && n.push(e)
            }), itemsHTML = $.map(n, function (e) {
                if (e) return e
            });
            var t = $(itemsHTML.join(""));
            if (t.length > 0)
                for (var r = 0; r < t.length; r++) "" != t[r] && o.owlCarousel("add", t[r]).owlCarousel("update")
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxEventsIndbyCity(e) {
    $(".eventsPromo").html(""), $(".eventsPromo").LoadingOverlay("show"), $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            var a = [];
            $(e.eventsPromo).each(function () {
                var e = $(this).html();
                a.push(e)
            }), itemsHTML = $.map(a, function (e) {
                return e
            });
            var o = $(itemsHTML.join(""));
            $(function () {
                var e = $(".eventsPromo");
                sjq(e).imagesLoaded(function () {
                    sjq(e).isotope({
                        masonry: {
                            columnWidth: ".eventInd"
                        }
                    }), sjq(o).imagesLoaded(function () {
                        sjq(e).append(o).isotope("appended", o).isotope("layout")
                    })
                })
            }), $(".eventsPromo").LoadingOverlay("hide", !0)
        },
        error: function (e) {
            alert("No results"), $(".eventsPromo").LoadingOverlay("hide", !0);
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxEventsInd(e) {
    $(".eventsPromo").LoadingOverlay("show"), $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            var a = [];
            $(e.eventsPromo).each(function () {
                var e = $(this).html();
                a.push(e)
            }), itemsHTML = $.map(a, function (e) {
                return e
            });
            var o = $(itemsHTML.join(""));
            $(function () {
                var e = $(".eventsPromo");
                sjq(e).imagesLoaded(function () {
                    sjq(e).isotope({
                        masonry: {
                            columnWidth: ".eventInd"
                        }
                    }), sjq(o).imagesLoaded(function () {
                        sjq(e).append(o).isotope("appended", o).isotope("layout")
                    })
                })
            }), $(".eventsPromo").LoadingOverlay("hide", !0)
        },
        error: function (e) {
            alert("No results");
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxTopPlacesHome(e) {
    $(".moreImagesTop").LoadingOverlay("show");
    var a = $(".pagina").val();
    $.ajax({
        type: "GET",
        url: e,
        data: {
            page: a
        },
        dataType: "json",
        success: function (e) {
            window.current_page = current_page + 1;
            var a = [];
            $(e.topPlaces).each(function () {
                var e = $(this).html();
                a.push(e)
            }), itemsHTML = $.map(a, function (e) {
                return e
            });
            var o = $(itemsHTML.join(""));
            $(function () {
                var e = $(".topPlaces");
                sjq(e).imagesLoaded(function () {
                    sjq(e).isotope({
                        masonry: {
                            columnWidth: 100
                        }
                    }), sjq(o).imagesLoaded(function () {
                        sjq(e).append(o).isotope("appended", o).isotope("layout")
                    })
                })
            }), $(".moreImagesTop").LoadingOverlay("hide", !0)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxEventsHome(e) {
    $(".eventsPromo").LoadingOverlay("show"), $.ajax({
        type: "GET",
        url: e,
        data: {
            page: window.current_page_e + 1
        },
        dataType: "json",
        success: function (e) {
            window.current_page_e = current_page_e + 1;
            var a = [];
            $(e.eventsPromo).each(function () {
                var e = $(this).html();
                a.push(e)
            }), itemsHTML = $.map(a, function (e) {
                return e
            });
            var o = $(itemsHTML.join(""));
            $(function () {
                var e = $(".eventsPromo");
                sjq(e).imagesLoaded(function () {
                    sjq(e).isotope({
                        masonry: {
                            columnWidth: ".eventInd"
                        }
                    }), sjq(o).imagesLoaded(function () {
                        sjq(e).append(o).isotope("appended", o).isotope("layout"), $(".eventsPromo").LoadingOverlay("hide", !0)
                    })
                })
            })
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxregiones(e) {
    $(".regiones").LoadingOverlay("show"), $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $(".regiones").LoadingOverlay("hide", !0), $(".regiones").html(e.regiones)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxPromociones(e) {
    $(".promocionesAtraccion").LoadingOverlay("show"), $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $(".promocionesAtraccion").html(e.promocionesAtraccion), $(".promocionesAtraccion").LoadingOverlay("hide", !0)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxEventos(e) {
    $(".eventosAtraccion").LoadingOverlay("show"), $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $(".eventosAtraccion").html(e.eventosAtraccion), $(".eventosAtraccion").LoadingOverlay("hide", !0)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxCloseIntern(e) {
    var a = $(".pagina").val();
    $.ajax({
        type: "GET",
        url: e,
        data: {
            page: a
        },
        dataType: "json",
        success: function (e) {
            window.current_pageIntern = current_pageIntern + 1;
            var a = [];
            $(e.cercanos).each(function () {
                var e = $(this).html();
                a.push(e)
            }), itemsHTML = $.map(a, function (e) {
                return e
            });
            var o = $(itemsHTML.join(""));
            $(function () {
                var e = $(".cercanos");
                sjq(e).imagesLoaded(function () {
                    sjq(e).isotope({
                        masonry: {
                            columnWidth: 100
                        }
                    }), sjq(o).imagesLoaded(function () {
                        sjq(e).append(o).isotope("appended", o).isotope("layout")
                    })
                })
            })
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxSearchCatogoriesApp(e) {
    var a = $(".pagina").val();
    $(".moreImg").LoadingOverlay("show"), $.ajax({
        type: "GET",
        url: e,
        data: {
            page: a
        },
        dataType: "json",
        success: function (e) {
            window.current_pageSeCatApp = current_pageSeCatApp + 1;
            var a = [];
            $(e.Searchcategorias).each(function () {
                var e = $(this).html();
                a.push(e)
            }), itemsHTML = $.map(a, function (e) {
                return e
            });
            var o = $(itemsHTML.join(""));
            $(function () {
                var e = $(".Searchcategorias1");
                sjq(e).imagesLoaded(function () {
                    sjq(e).isotope({
                        masonry: {
                            columnWidth: 100
                        }
                    }), sjq(o).imagesLoaded(function () {
                        sjq(e).append(o).isotope("appended", o).isotope("layout")
                    })
                })
            }), $(".moreImg").LoadingOverlay("hide", !0)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxSearchCatogories(e) {
    $(".Searchcategorias1").LoadingOverlay("show"), $.ajax({
        type: "GET",
        url: e,
        data: {
            page: window.current_pageSeCat + 1
        },
        dataType: "json",
        success: function (e) {
            window.current_pageSeCat = current_pageSeCat + 1;
            var a = [];
            $(e.Searchcategorias).each(function () {
                var e = $(this).html();
                a.push(e)
            }), itemsHTML = $.map(a, function (e) {
                return e
            });
            var o = $(itemsHTML.join(""));
            $(function () {
                var e = $(".Searchcategorias1");
                sjq(e).imagesLoaded(function () {
                    sjq(e).isotope({
                        masonry: {
                            columnWidth: 100
                        }
                    }), sjq(o).imagesLoaded(function () {
                        sjq(e).append(o).isotope("appended", o).isotope("layout")
                    })
                })
            }), $(".Searchcategorias1").LoadingOverlay("hide", !0)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxSearchTotalClean(e) {
    $(".SearchTotalPartial1").LoadingOverlay("show"), $.ajax({
        type: "GET",
        url: e,
        data: {
            page: window.current_pageSet + 1
        },
        dataType: "json",
        success: function (e) {
            window.current_pageSet = current_pageSet + 1, $(".SearchTotalPartial1").html("");
            var a = [];
            $(e.SearchTotalPartial).each(function () {
                var e = $(this).html();
                a.push(e)
            }), itemsHTML = $.map(a, function (e) {
                return e
            });
            var o = $(itemsHTML.join(""));
            $(function () {
                var e = $(".SearchTotalPartial1");
                sjq(e).imagesLoaded(function () {
                    sjq(e).isotope({
                        masonry: {
                            columnWidth: 100
                        }
                    }), sjq(o).imagesLoaded(function () {
                        sjq(e).append(o).isotope("insert", o).isotope("layout")
                    })
                })
            }), $(".SearchTotalPartial1").LoadingOverlay("hide", !0)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function AjaxContainerRegistroWithLoadFilter(e, a) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=_token]").attr("content")
        }
    }), $("." + a).LoadingOverlay("show");
    var o = $("#" + e),
        n = o.serialize(),
        t = o.attr("action");
    $.post(t, {
        formData: n
    }).done(function (e) {
        if (e.fail) {
            var o = "<ul>";
            $.each(e.errors, function (e, a) {
                o += "<li>" + a + "</li>"
            }), o += "</ul>", $("." + a).LoadingOverlay("hide", !0), $(".rowerrorM").html(o)
        }
        e.success && ($(".Searchcategorias1").html(e.sections.Searchcategorias), $("." + a).LoadingOverlay("hide", !0))
    })
}

function GetDataAjaxCatogories(e) {
    var a = $(".pagina").val();
    $(".moreImg").LoadingOverlay("show"), $.ajax({
        type: "GET",
        url: e,
        data: {
            page: a
        },
        dataType: "json",
        success: function (e) {
            window.current_pageCat = current_pageCat + 1;
            var a = [];
            $(e.categorias).each(function () {
                var e = $(this).html();
                a.push(e)
            }), itemsHTML = $.map(a, function (e) {
                return e
            });
            var o = $(itemsHTML.join(""));
            $(function () {
                var e = $(".categorias1");
                sjq(e).imagesLoaded(function () {
                    sjq(e).isotope({
                        masonry: {
                            columnWidth: 100
                        }
                    }), sjq(o).imagesLoaded(function () {
                        sjq(e).append(o).isotope("appended", o).isotope("layout")
                    })
                })
            }), $(".moreImg").LoadingOverlay("hide", !0)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetLikes(e) {
    $(".likes").LoadingOverlay("show"), $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $(".likes").html(e.likes), $(".likes").LoadingOverlay("hide", !0)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetReview(e) {
    $.ajax({
        type: "GET",
        url: e,
        data: {
            page: window.current_pageReview + 1
        },
        dataType: "json",
        success: function (e) {
            window.current_pageReview = current_pageReview + 1, $(".review").append(e.review)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function AjaxContainerRegistroLoadF(e, a) {
    var o = $("#" + e),
        n = o.serialize(),
        t = o.attr("action");
    $.post(t, {
        formData: n
    }).done(function (e) {
        e.fail && ($.each(e.errors, function (e, a) {}), alert(e.message), $("." + a).LoadingOverlay("hide", !0)), e.success && alert(e.message)
    })
}

function AjaxContainerRegistro(e) {
    $(".btn-compare").LoadingOverlay("show");
    var a = $("#" + e),
        o = a.serialize(),
        n = a.attr("action");
    $.post(n, {
        formData: o
    }).done(function (e) {
        if (e.fail) {
            alert("fail");
            var a = "<ul>";
            $.each(e.errors, function (e, o) {
                a += "<li>" + o + "</li>"
            }), a += "</ul>", $("#target").LoadingOverlay("hide", !0), $(".rowerror").html(a)
        }
        e.success && ($("#loadingScreen").LoadingOverlay("hide", !0), window.location.href = e.redirectto)
    })
}

function ajaxajax() {
    var e = {
        key: $("#search-query").val()
    };
    $.ajax({
        type: "POST",
        url: "likesS",
        data: JSON.stringify(e),
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (e) {
            e.redirect && (window.location.href = e.redirect), $(".builder").empty(), alert("Key Passed Successfully!!!")
        }
    })
}

function AjaxContainerRetrunBurnURLikes(e, a, o, n) {
    var t = $("#" + a).serialize() + "&ids=" + o,
        r = e + o;
    $.post(r, {
        formData: t
    }).done(function (e) {
        if (e.fail) {
            $.each(e.errors, function (e, a) {
                "<li>" + a + "</li>"
            }), "</ul>", $("#" + a).LoadingOverlay("hide", !0)
        }
        e.success && GetLikes("/getLikesA/" + a)
    })
}

function AjaxContainerRetrunBurnURL(e, a, o, n) {
    $(".".$load).LoadingOverlay("show");
    var t = $("#" + a).serialize() + "&ids=" + o,
        r = e + o;
    $.post(r, {
        formData: t
    }).done(function (e) {
        if (e.fail) {
            $.each(e.errors, function (e, a) {
                "<li>" + a + "</li>"
            }), "</ul>", $("#" + a).LoadingOverlay("hide", !0)
        }
        e.success && $(".".$load).LoadingOverlay("hide", !0)
    })
}

function GetDataAjaxSearchCatogoriesIntern(e) {
    var a = $(".pagina").val();
    $(".moreImg").LoadingOverlay("show"), $.ajax({
        type: "GET",
        url: e,
        data: {
            page: a
        },
        dataType: "json",
        success: function (e) {
            window.current_pageSeCat = current_pageSeCat + 1, 1 == window.current_pageSeCat && $(".categorias1").html("");
            var a = [];
            $(e.categorias).each(function () {
                var e = $(this).html();
                a.push(e)
            }), itemsHTML = $.map(a, function (e) {
                return e
            });
            var o = $(itemsHTML.join(""));
            $(function () {
                var e = $(".categorias1");
                sjq(e).imagesLoaded(function () {
                    sjq(e).isotope({
                        masonry: {
                            columnWidth: 100
                        }
                    }), sjq(o).imagesLoaded(function () {
                        sjq(e).append(o).isotope("appended", o).isotope("layout")
                    })
                })
            }), $(".moreImg").LoadingOverlay("hide", !0)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function ReportarErrores(e) {
    $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#errores .close").click(), swal("Muchas Gracias!", "Atenderemos su Solicitud!", "success")
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function PostErrores(e, a) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=_token]").attr("content")
        }
    }), $("#modalerrores1").LoadingOverlay("show");
    var o = $("#" + e),
        n = o.serialize();
    url = o.attr("action"), $.post(url, {
        formData: n
    }).done(function (e) {
        if (e.fail) {
            var a = "<ul>";
            $.each(e.errors, function (e, o) {
                a += "<li>" + o + "</li>"
            }), a += "</ul>", $("#target").LoadingOverlay("hide", !0), $(".rowerror").html(a)
        }
        e.success && ($("#modalerrores1").LoadingOverlay("hide", !0), $("#errorguardar .close").click(), swal("Muchas Gracias!", "Nos Comunicaremos a la brevedad posible!", "success"))
    })
}

function PostContactosNuevo(e, a) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=_token]").attr("content")
        }
    }), $("#target").LoadingOverlay("show");
    var o = $("#" + e),
        n = o.serialize();
    url = o.attr("action"), $.post(url, {
        formData: n
    }).done(function (e) {
        if (e.fail) {
            var a = "<ul>";
            $.each(e.errors, function (e, o) {
                a += "<li>" + o + "</li>"
            }), a += "</ul>", $("#target").LoadingOverlay("hide", !0), $(".rowerror").html(a)
        }
        e.success && ($("#nombres,#email,#telefono").val(""), $("#target").LoadingOverlay("hide", !0), swal("Muchas Gracias!", "Atenderemos su Solicitud!", "success"))
    })
}

function GetDataLatestOperators() {
    $.ajax({
        type: "GET",
        url: "/latestServices",
        data: "",
        success: function (e) {
            $("#latestOperatosHtml").html(e.latestServices)
        },
        error: function (e) {
            console.log(e)
        }
    })
}

function AjaxContainerReviewImageLoadF(e, a, o) {
    e.preventDefault();
    var n = $("#spinner-save-review-img");
    if (!n.is(":visible")) {
        n.show();
        var t = $("#" + a),
            r = t.serialize(),
            i = t.attr("action");
        $.post(i, {
            formData: r
        }).done(function (e) {
            e.fail && ($.each(e.errors, function (e, a) {}), alert(e.message), n.hide()), e.success && (alert(e.message), n.hide(), $("#modal-review-explore").modal("toggle"))
        })
    }
}

function AjaxContainerRegistroWithLoadFilterInterno(e, a) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=_token]").attr("content")
        }
    }), $("." + a).LoadingOverlay("show");
    var o = $("#" + e),
        n = o.serialize(),
        t = o.attr("action");
    $.post(t, {
        formData: n
    }).done(function (e) {
        if (e.fail) {
            var o = "<ul>";
            $.each(e.errors, function (e, a) {
                o += "<li>" + a + "</li>"
            }), o += "</ul>", $("." + a).LoadingOverlay("hide", !0), $(".rowerrorM").html(o)
        }
        e.success && ($(".categorias1").html(e.sections.categorias1), $("." + a).LoadingOverlay("hide", !0))
    })
}

function saveSubscription(e, a, o) {
    e.preventDefault(), $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=_token]").attr("content")
        }
    }), $(".rowerrorSubscription").html("");
    var n = $("#" + a),
        t = n.serialize(),
        r = n.attr("action");
    $.post(r, {
        formData: t
    }).done(function (e) {
        if (e.fail) {
            var a = "<ul>";
            $.each(e.errors, function (e, o) {
                a += "<li>" + o + "</li>"
            }), a += "</ul>", $(".rowerrorSubscription").html(a)
        }
        e.success && (alert(e.message), location.reload())
    })
}
$.ajaxSetup({
    headers: {
        "X-CSRF-Token": $("meta[name=_token]").attr("content")
    }
}), window.current_pageSet = 1, window.current_pageSet = 0, window.current_page = 0, window.current_page_e = 1, window.current_pageIntern = 0, window.current_pageSeCatApp = 1, window.current_pageSeCat = 0, window.current_pageSet = 0, window.current_pageCat = 0, window.current_pageReview = 0, window.current_pageSeCat = 0, GetDataLatestOperators();