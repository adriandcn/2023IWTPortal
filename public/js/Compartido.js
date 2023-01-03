function AjaxContainerRegistro(e) {
    $("#target").LoadingOverlay("show");
    var a = $("#" + e),
        o = a.serialize(),
        r = a.attr("action");
    $.post(r, {
        formData: o
    }).done(function (e) {
        if (e.fail) {
            var a = "<ul>";
            $.each(e.errors, function (e, o) {
                a += "<li>" + o + "</li>"
            }), a += "</ul>", $("#target").LoadingOverlay("hide", !0), $(".rowerror").html(a)
        }
        e.success && ($("#loadingScreen").LoadingOverlay("hide", !0), window.location.href = e.redirectto)
    })
}

function RenderBooking(e, a) {
    var o, r = "/booking/" + a;
    console.log(r);
    $.ajax({
        type: "GET",
        url: r,
        data: "",
        success: function (e) {
            console.log(e);
            window.open(e.redirectto, '_blank').focus();
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

function RenderBookingCalendario(e, a, o) {
    var r = "/bookingCalendario/" + a + "/" + o;
    console.log(r), $.ajax({
        type: "GET",
        url: r,
        data: "",
        success: function (e) {
            console.log(e), window.open(e.redirectto, "_blank")
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function sendMailBooking(e, a) {
    var o = {
        token: e,
        nombre: a
    };
    $.ajax({
        type: "POST",
        url: "/sendMailBooking",
        data: o,
        dataType: "json",
        success: function (e) {},
        error: function (e) {}
    })
}

function AjaxSaveDetailsFotografiaProfile(e, a) {
    $(".error").html(""), $("#target").LoadingOverlay("show");
    var o = $("#" + e),
        r = o.serialize() + "&ids=" + a + "&actionImageProfile=update";
    url = o.attr("action"), $.post(url, {
        formData: r
    }).done(function (e) {
        if (e.fail) {
            var a = "<ul>";
            $.each(e.errors, function (e, o) {
                a += "<li>" + o + "</li>"
            }), a += "</ul>", $("#target").LoadingOverlay("hide", !0), $(".rowerror").html(a)
        }
        if (e.success) {
            $("#target").LoadingOverlay("hide", !0), $(".register").fadeOut();
            e.message
        }
    })
}

function AjaxSaveDetailsFotografia(e, a) {
    $(".error").html(""), $("#target").LoadingOverlay("show");
    var o = $("#" + e),
        r = o.serialize() + "&ids=" + a + "&actionImage=update";
    url = o.attr("action"), $.post(url, {
        formData: r
    }).done(function (e) {
        if (e.fail) {
            var a = "<ul>";
            $.each(e.errors, function (e, o) {
                a += "<li>" + o + "</li>"
            }), a += "</ul>", $("#target").LoadingOverlay("hide", !0), $(".rowerror").html(a)
        }
        if (e.success) {
            $("#target").LoadingOverlay("hide", !0), $(".register").fadeOut();
            e.message
        }
    })
}

function AjaxContainerVistaPreviaPromocion(e) {
    $("#target").LoadingOverlay("show");
    var a = "/vistaPreviaPromocion/" + e;
    $.ajax({
        type: "GET",
        url: a,
        data: "",
        success: function (e) {
            console.log(e), console.log(e.redirectto), window.location.href = e.redirectto
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function AjaxContainerEdicionPromociones(e) {
    var a = "/promocionPreview/" + e;
    $.ajax({
        type: "GET",
        url: a,
        data: "",
        success: function (e) {
            window.location.href = e.redirectto
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function AjaxContainerVistaPreviaEvento(e) {
    $("#target").LoadingOverlay("show");
    var a = "/vistaPreviaEvento/" + e;
    $.ajax({
        type: "GET",
        url: a,
        data: "",
        success: function (e) {
            window.location.href = e.redirectto
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function AjaxContainerEdicionEventos(e) {
    var a = "/eventoPreview/" + e;
    $.ajax({
        type: "GET",
        url: a,
        data: "",
        success: function (e) {
            window.location.href = e.redirectto
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function UpdateEstadoError(e) {
    $("#target").LoadingOverlay("show"), $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#target").LoadingOverlay("hide", !0)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function AjaxContainerRegistroWithLoad(e, a) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=_token]").attr("content")
        }
    }), $("." + a).LoadingOverlay("show");
    var o = $("#" + e),
        r = o.serialize(),
        n = o.attr("action");
    $.post(n, {
        formData: r
    }).done(function (e) {
        if (e.fail) {
            var o = "<ul>";
            $.each(e.errors, function (e, a) {
                o += "<li>" + a + "</li>"
            }), o += "</ul>", $("." + a).LoadingOverlay("hide", !0), $(".rowerrorM").html(o)
        }
        e.success && ($("." + a).LoadingOverlay("hide", !0), window.location.href = e.redirectto)
    })
}

function AjaxContainerRetrunMessagePostParametro(e, a) {
    $(".error").html(""), $("#target").LoadingOverlay("show");
    var o = $("#" + e),
        r = o.serialize() + "&catalogo=" + a;
    url = o.attr("action"), $.post(url, {
        formData: r
    }).done(function (e) {
        if (e.fail) {
            var a = "<ul>";
            $.each(e.errors, function (e, o) {
                a += "<li>" + o + "</li>"
            }), a += "</ul>", $("#target").LoadingOverlay("hide", !0), $(".rowerror").html(a)
        }
        e.success && ($("#target").LoadingOverlay("hide", !0), window.location.href = e.redirectto)
    })
}

function AjaxContainerRegistroWithLoadCharge(e, a, o) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=_token]").attr("content")
        }
    }), $("." + a).LoadingOverlay("show");
    var r = $("#" + e),
        n = r.serialize(),
        t = r.attr("action");
    $.post(t, {
        formData: n
    }).done(function (e) {
        if (e.fail) {
            var r = "<ul>";
            $.each(e.errors, function (e, a) {
                r += "<li>" + a + "</li>"
            }), r += "</ul>", $("." + a).LoadingOverlay("hide", !0), $(".rowerrorM").html(r)
        }
        e.success && ($("." + a).LoadingOverlay("hide", !0), alert("El itinerario ha sido agregado. Puede modificar los campos para agregar un nuevo itinerario"), GetDataAjaxSectionItiner("/getlistaItinerarios/" + o))
    })
}

function AjaxContainerRegistroWithMessage(e, a, o) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=_token]").attr("content")
        }
    }), $("." + a).LoadingOverlay("show");
    var r = $("#" + e),
        n = r.serialize(),
        t = r.attr("action");
    $.post(t, {
        formData: n
    }).done(function (e) {
        if (e.fail) {
            var r = "<ul>";
            $.each(e.errors, function (e, a) {
                r += "<li>" + a + "</li>"
            }), r += "</ul>", $("." + a).LoadingOverlay("hide", !0), $(".rowerrorM").html(r)
        }
        e.success && ($("." + a).LoadingOverlay("hide", !0), alert(o))
    })
}

function RenderPartialGeneric(e, a) {
    callModal("cls");
    var o = "/render/" + e;
    $.ajax({
        type: "GET",
        url: o,
        data: {}
    }).done(function (e) {
        $("#basic-modal-content").html(e.newHtml), $("#basic-modal-content").find(".id_usuario_servicio").val(a), $(".simplemodal-wrap").LoadingOverlay("hide", !0)
    })
}

function RenderPartialGenericFotografia(e, a, o, r) {
    callModal("cls");
    var n = "/render/" + e;
    $.ajax({
        type: "GET",
        url: n,
        data: {}
    }).done(function (e) {
        $("#basic-modal-content").html(e.newHtml), $("#basic-modal-content").find("#id_catalogo_fotografia").val(a), $("#basic-modal-content").find("#id_usuario_servicio").val(o), $("#basic-modal-content").find("#id_auxiliar").val(r), $(".simplemodal-wrap").LoadingOverlay("hide", !0)
    })
}

function RenderPartialGenericMap(e, a) {
    callModalMap("cls");
    var o = "/render/" + e;
    $.ajax({
        type: "GET",
        url: o,
        data: {}
    }).done(function (e) {
        $("#basic-modal-content").html(e.newHtml), $("#basic-modal-content").find(".id_itinerario").val(a)
    })
}

function UpdateEstado(e) {
    $("#target").LoadingOverlay("show"), $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#target").LoadingOverlay("hide", !0)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function RenderPartialGenericMapUpdate(e, a, o) {
    callModalMap("cls");
    var r = "/render/" + e + "/" + o;
    $.ajax({
        type: "GET",
        url: r,
        data: {}
    }).done(function (e) {
        $("#basic-modal-content").html(e.newHtml), $("#basic-modal-content").find(".id_itinerario").val(a), $("#basic-modal-content").find(".id_detalle").val(o)
    })
}

function RenderPartialPadre(e, a, o, r) {
    callModalMap("cls");
    var n = "/render/" + e + "/" + r;
    $.ajax({
        type: "GET",
        url: n,
        data: {}
    }).done(function (e) {
        $("#basic-modal-content").html(e.newHtml), $("#basic-modal-content").find(".id_catalogo_servicio").val(a), $("#basic-modal-content").find(".id_usuario_operador").val(o), $("#basic-modal-content").find(".id_padre").val(r), $(".simplemodal-wrap").LoadingOverlay("hide", !0)
    })
}

function RenderPartial(e, a, o) {
    callModal("cls");
    var r = "/render/" + e;
    $.ajax({
        type: "GET",
        url: r,
        data: {}
    }).done(function (e) {
        $("#basic-modal-content").html(e.newHtml), $("#basic-modal-content").find(".id_catalogo_servicio").val(a), $("#basic-modal-content").find(".id_usuario_operador").val(o), $(".simplemodal-wrap").LoadingOverlay("hide", !0)
    })
}

function GetDataAjax(e) {
    $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#renderPartial").LoadingOverlay("show"), $("#renderPartial").html(e.dificultades), $("#renderPartial").LoadingOverlay("hide", !0)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxSection(e) {
    $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#renderPartial").LoadingOverlay("show"), $("#renderPartial").html(e.contentPanel), $("#renderPartial").LoadingOverlay("hide", !0)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxSectionEventos(e) {
    $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#renderPartialListaServicios").LoadingOverlay("show"), $("#renderPartialListaServicios").html(e.contentPanelServicios), $("#renderPartialListaServicios").LoadingOverlay("hide", !0)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxImagenes(e) {
    $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#renderPartialImagenes").html(e.contentImagenes)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxProvincias(e) {
    $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#provincias").html(e.provincias)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxCantones(e) {
    $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#canton").html(e.cantones)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxDescripcion(e) {
    $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#descripcionGeografica1").html(e.descripcionGeografica)
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
    $("#modalerrores").LoadingOverlay("show"), $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#modalerrores").LoadingOverlay("hide", !0), $("#errores .close").click(), swal("Muchas Gracias!", "Atenderemos su Solicitud!", "success")
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
        r = o.serialize();
    url = o.attr("action"), $.post(url, {
        formData: r
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
        r = o.serialize();
    url = o.attr("action"), $.post(url, {
        formData: r
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

function GetDataAjaxParroquias(e) {
    $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#parroquia").html(e.parroquias)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxSectionItiner(e, a) {
    $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#renderPartialItinerarios").LoadingOverlay("show"), $("#renderPartialItinerarios").html(e.contentPanelItinerarios), $("#renderPartialItinerarios").find(".id_usuario_servicio").val(a), $("#renderPartialItinerarios").LoadingOverlay("hide", !0)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function AjaxContainerRetrunMessage(e, a) {
    $(".error").html(""), $("#target").LoadingOverlay("show");
    var o = $("#" + e),
        r = o.serialize() + "&ids=" + a;
    url = o.attr("action"), $.post(url, {
        formData: r
    }).done(function (e) {
        if (e.fail) {
            var a = "<ul>";
            $.each(e.errors, function (e, o) {
                a += "<li>" + o + "</li>"
            }), a += "</ul>", $("#target").LoadingOverlay("hide", !0), $(".rowerror").html(a)
        }
        if (e.success) {
            $("#target").LoadingOverlay("hide", !0), $(".register").fadeOut();
            e.message
        }
    })
}

function AjaxContainerRetrunMessageTours(e, a) {
    $(".error").html(""), $("#target").LoadingOverlay("show");
    var o = $("#" + e),
        r = o.serialize() + "&ids=" + a;
    alert(o);
    url = o.attr("action"), $.post(url, {
            formData: r
        })
        .done(function (e) {
            if (e.fail) {
                var a = "<ul>";
                $.each(e.errors, function (e, o) {
                    a += "<li>" + o + "</li>"
                }), a += "</ul>", $("#target").LoadingOverlay("hide", !0), $(".rowerror").html(a)
            }
            if (e.success) {
                $("#target").LoadingOverlay("hide", !0), $(".register").fadeOut();
                e.message
            }
        })
}


function AjaxContainerRetrunBurnURL(e, a, o, r) {
    $(".error").html(""), $("#".$load).LoadingOverlay("show");
    var n = $("#" + a).serialize() + "&ids=" + o,
        t = e + o;
    $.post(t, {
        formData: n
    }).done(function (e) {
        if (e.fail) {
            var o = "<ul>";
            $.each(e.errors, function (e, a) {
                o += "<li>" + a + "</li>"
            }), o += "</ul>", $("#" + a).LoadingOverlay("hide", !0), $(".rowerror").html("@include('partials/error', ['type' => 'danger','message'=>'" + o + "'])")
        }
        e.success && $("#".$load).LoadingOverlay("hide", !0)
    })
}

function AjaxContainerRegistroParametro(e, a) {
    $("#loadingScreen").LoadingOverlay("show");
    var o = (r = $("#" + e)).serialize() + "&ids=" + $id;
    n = r.attr("action");
    $.post(n, {
        formData: o
    }), o = (r = $("#" + e)).serialize();
    var r, n = r.attr("action");
    $.post(n, {
        formData: o
    }).done(function (a) {
        if (a.fail) {
            var o = "<ul>";
            $.each(a.errors, function (e, a) {
                o += "<li>" + a + "</li>"
            }), o += "</ul>", $("#" + e).LoadingOverlay("hide", !0), $(".rowerror").html(o)
        }
        a.success && ($("#loadingScreen").LoadingOverlay("hide", !0), window.location.href = a.redirectto)
    })
}

function AjaxContainerRegistro1(e) {
    $("#target").LoadingOverlay("show");
    var a = $("#" + e),
        o = a.serialize(),
        r = a.attr("action");
    $.post(r, {
        formData: o
    }).done(function (e) {
        if (e.fail) {
            var a = "<ul>";
            $.each(e.errors, function (e, o) {
                a += "<li>" + o + "</li>"
            }), a += "</ul>", $("#target").LoadingOverlay("hide", !0), $(".rowerror").html(a)
        }
        e.success && ($("#target").LoadingOverlay("hide", !0), window.location.href = e.redirectto)
    })
}

function AjaxContainerRegistro2(e) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=_token]").attr("content")
        }
    }), $("#target").LoadingOverlay("show");
    var a = $("#" + e),
        o = a.serialize(),
        r = a.attr("action");
    $.post(r, {
        formData: o
    }).done(function (e) {
        if (e.fail) {
            alert("Fail");
            var a = "<ul>";
            $.each(e.errors, function (e, o) {
                a += "<li>" + o + "</li>"
            }), a += "</ul>", $("#target").LoadingOverlay("hide", !0), $(".rowerror").html(a)
        }
        e.success && ($("#target").LoadingOverlay("hide", !0), window.location.href = e.redirectto)
    })
}

function AjaxContainerCambioDashboard() {
    $("#target").LoadingOverlay("show");
    window.location.href = "/serviciosres", $("#target").LoadingOverlay("hide", !0)
}

function AjaxContainerEdicionServicios(e, a) {
    $("#target").LoadingOverlay("show");
    var o = "/servicios/serviciooperador1/" + e + "/" + a;
    $.ajax({
        type: "GET",
        url: o,
        data: "",
        success: function (e) {
            window.location.href = e.redirectto
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function AjaxContainerInfoOperador() {
    $("#target").LoadingOverlay("show");
    $.ajax({
        type: "GET",
        url: "/infoOperador",
        data: "",
        success: function (e) {
            setTimeout(function () {
                $("#target").LoadingOverlay("hide", !0), window.location.href = e.redirectto
            }, 1e3)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function AjaxContainerRegistroWithLoad1(e, a) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=_token]").attr("content")
        }
    }), $("." + a).LoadingOverlay("show");
    var o = $("#" + e),
        r = o.serialize(),
        n = o.attr("action");
    $.post(n, {
        formData: r
    }).done(function (e) {
        if (console.log(e), e.fail) {
            var o = "<ul>";
            $.each(e.errors, function (e, a) {
                o += "<li>" + a + "</li>"
            }), o += "</ul>", $("." + a).LoadingOverlay("hide", !0), $(".rowerrorM").html(o)
        }
        e.success && ($("." + a).LoadingOverlay("hide", !0), window.location.href = e.redirectto)
    })
}

function AjaxContainerRegistroWithLoad2(e, a) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=_token]").attr("content")
        }
    }), $("." + a).LoadingOverlay("show");
    var o = $("#" + e),
        r = o.serialize(),
        n = o.attr("action");
    $.post(n, {
        formData: r
    }).done(function (e) {
        if (e.fail) {
            var o = "<ul>";
            $.each(e.errors, function (e, a) {
                o += "<li>" + a + "</li>"
            }), o += "</ul>", $("." + a).LoadingOverlay("hide", !0), $(".rowerrorM").html(o)
        }
        e.success && ($("." + a).LoadingOverlay("hide", !0), window.location.href = e.redirectto)
    })
}

function UpdateServicioInfo(e, a) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=_token]").attr("content")
        }
    }), $(".error").html(""), $("#target").LoadingOverlay("show");
    var o = $("#" + e),
        r = o.serialize(),
        n = o.attr("action");
    $.post(n, {
        formData: r
    }).done(function (e) {
        if (e.fail) {
            alert("Fail");
            $.each(e.errors, function (e, a) {
                "<li>" + a + "</li>"
            }), "</ul>", $("#target").LoadingOverlay("hide", !0)
        }
        e.success && $("#target").LoadingOverlay("hide", !0)
    })
}

function UpdateServicioInfo1(e, a) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=_token]").attr("content")
        }
    }), $(".error").html(""), $("#target").LoadingOverlay("show");
    var o = $("#" + e).serialize();
    $.post("/uploadServiciosRes1", {
        formData: o
    }).done(function (e) {
        if (e.fail) {
            $.each(e.errors, function (e, a) {
                "<li>" + a + "</li>"
            }), "</ul>", $("#target").LoadingOverlay("hide", !0)
        }
        e.success && ($("#target").LoadingOverlay("hide", !0), window.location.href = e.redirectto)
    })
}

function GetDataAjaxImagenesRes(e) {
    console.log(e), $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#renderPartialImagenes").html(e.contentImagenes)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxImagenes1(e) {
    $("#testboxForm").LoadingOverlay("show");
    var a = "/imagenesAjaxDescription1/1/" + e;
    $.ajax({
        type: "GET",
        url: a,
        dataType: "json",
        success: function (e) {
            window.location.href = "/edicionServicios"
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function AjaxContainerVistaPrevia(e) {
    $("#target").LoadingOverlay("show");
    var a = "/vistaPreviaServicio/" + e;
    $.ajax({
        type: "GET",
        url: a,
        data: "",
        success: function (e) {
            console.log(e), window.location.href = e.redirectto
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function AjaxSaveDetailsFotografia1(e, a) {
    $(".error").html(""), $("#target").LoadingOverlay("show");
    var o = $("#" + e),
        r = o.serialize() + "&ids=" + a + "&actionImage=update";
    url = o.attr("action"), console.log(url), console.log(r), $.post(url, {
        formData: r
    }).done(function (e) {
        if (e.fail) {
            var a = "<ul>";
            $.each(e.errors, function (e, o) {
                a += "<li>" + o + "</li>"
            }), a += "</ul>", $("#target").LoadingOverlay("hide", !0), $(".rowerror").html(a)
        }
        e.success && $("#target").LoadingOverlay("hide", !0)
    })
}

function GetDataAjaxProvincias1(e) {
    $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#provincias").html(e.provincias)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxCantones1(e) {
    $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#canton").html(e.cantones)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxParroquias1(e) {
    $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#parroquia").html(e.parroquias)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxDescripcion1(e) {
    $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#descripcionGeografica1").html(e.descripcionGeografica)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function AjaxContainerRetrunMessageImagenRes(e, a) {
    $(".error").html("");
    var o = $("#" + e),
        r = o.serialize() + "&ids=" + a;
    url = o.attr("action"), $.post(url, {
        formData: r
    }).done(function (e) {
        if (e.fail) {
            var a = "<ul>";
            $.each(e.errors, function (e, o) {
                a += "<li>" + o + "</li>"
            }), a += "</ul>", $("#target").LoadingOverlay("hide", !0), $(".rowerror").html(a)
        }
        if (e.success) {
            $(".register").fadeOut();
            e.message
        }
    })
}

function UpdateServicioActivo(e) {
    $("#target").LoadingOverlay("show"), $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#target").LoadingOverlay("hide", !0)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxPromo(e) {
    $("#target").LoadingOverlay("show"), $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#target").LoadingOverlay("hide", !0), window.location.href = e.redirectto
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataEditPromo(e) {
    $("#target").LoadingOverlay("show"), $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#target").LoadingOverlay("hide", !0), window.location.href = e.redirectto
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GuardarPromo(e, a) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-Token": $("meta[name=_token]").attr("content")
        }
    }), $(".error").html(""), $("#target").LoadingOverlay("show");
    var o = $("#" + e),
        r = o.serialize() + "&catalogo=" + a;
    url = o.attr("action"), $.post(url, {
        formData: r
    }).done(function (e) {
        if (e.fail) {
            var a = "<ul>";
            $.each(e.errors, function (e, o) {
                a += "<li>" + o + "</li>"
            }), a += "</ul>", $("#target").LoadingOverlay("hide", !0), $(".rowerror").html(a)
        }
        e.success && ($("#target").LoadingOverlay("hide", !0), window.location.href = e.redirectto)
    })
}

function AjaxContainerEdicionServicios(e, a) {
    var o = "/servicios/serviciooperador1/" + e + "/" + a;
    $.ajax({
        type: "GET",
        url: o,
        data: "",
        success: function (e) {
            window.location.href = e.redirectto
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function UpdatePermanente(e) {
    $("#target").LoadingOverlay("show"), $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#target").LoadingOverlay("hide", !0)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function UpdateServicioActivo(e) {
    $("#target").LoadingOverlay("show"), $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#target").LoadingOverlay("hide", !0)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxImagenes2(e) {
    $("#testboxForm").LoadingOverlay("show"), $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $("#renderPartialImagenes").html(e.contentImagenes)
        },
        error: function (e) {
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function GetDataAjaxSearchEvents(e, a) {
    $(".woocommerce").LoadingOverlay("show"), $.ajax({
        type: "POST",
        url: e,
        data: a,
        dataType: "json",
        success: function (e) {
            console.log("Exitoso"), console.log(e), $(".SearchTotalPartial").html(e.topEvent), $(".woocommerce").LoadingOverlay("hide", !0)
        },
        error: function (e) {
            $(".woocommerce").LoadingOverlay("hide", !0), console.log("ERROR"), console.log(e)
        }
    })
}

function AjaxContainerRegistroLoadFTours(e, a) {
    $("." + a).LoadingOverlay("show");
    var o = $("#" + e),
        r = o.serialize(),
        n = o.attr("action");
    $.post(n, {
        formData: r
    }).done(function (e) {
        e.fail && swal({
            title: e.message,
            type: "warning"
        }).then(o => {
            $("." + a).LoadingOverlay("hide", !0), 1 === e.closed && (window.location.href = "/")
        }), e.success && swal({
            title: e.message,
            type: "success"
        }).then(e => {
            $("." + a).LoadingOverlay("hide", !0), window.location.href = "/"
        })
    })
}

function AjaxCronReviewsTours(e) {
    console.log("Entro a la funcion URL", e), $(".woocommerce").LoadingOverlay("show"), $.ajax({
        type: "GET",
        url: e,
        dataType: "json",
        success: function (e) {
            $(".woocommerce").LoadingOverlay("hide", !0), alert(e.message)
        },
        error: function (e) {
            $(".woocommerce").LoadingOverlay("hide", !0), alert("Cron Review con errores al ejecutarlo");
            var a = e.responseJSON;
            a && $.each(a, function (e) {
                console.log(a[e])
            })
        }
    })
}

function saveAdminReview() {
    $.ajax({
        type: "POST",
        url: "./saveAdminReview",
        data: $("#formAdminReview").serialize(),
        success: function (e) {
            console.log(e), e.success && (alert("Review guardada correctamente"), location.reload())
        },
        error: function (e) {
            alert("error al guardar review")
        }
    })
}
$.ajaxSetup({
    headers: {
        "X-CSRF-Token": $("meta[name=_token]").attr("content")
    }
});