ui.prototype.init.darkMode = function(){
            n('#switchOnDark').click(function(){
                let btnSwitch = n(this).find('input');
                if (n(btnSwitch).is(':checked')){
                    n('main').addClass('bg-dark','text-white')
                    n('*').each(function(p,e){
                        if ((n(e).hasClass('bg-light')) || (n(e).hasClass('bg-custom'))){
                            n(e).removeClass('bg-light text-black');
                            n(e).addClass('text-white bg-dark')
                        }
                    })
                }else{
                    n('main').removeClass('bg-dark','text-white')
                    n('main').find('a,h3,h2,h5').removeClass('text-white')
                }
            });
        }();!function(t) {
    "use strict";
    var e = function() {};
    e.prototype.init = function() {
        t("#sa-basic").on("click", function() {
            Swal.fire({
                title: "Any fool can use a computer!",
                confirmButtonColor: "#348cd4"
            })
        }),
        t("#sa-title").click(function() {
            Swal.fire({
                title: "The Internet?",
                text: "That thing is still around?",
                type: "question",
                confirmButtonColor: "#348cd4"
            })
        }),
        t("#sa-success").click(function() {
            Swal.fire({
                title: "Good job!",
                text: "You clicked the button!",
                type: "success",
                confirmButtonColor: "#348cd4"
            })
        }),
        t("#sa-error").click(function() {
            Swal.fire({
                type: "error",
                title: "Oops...",
                text: "Something went wrong!",
                confirmButtonColor: "#348cd4",
                footer: '<a href="">Why do I have this issue?</a>'
            })
        }),
        t("#sa-long-content").click(function() {
            Swal.fire({
                imageUrl: "https://placeholder.pics/svg/300x1500",
                imageHeight: 1500,
                imageAlt: "A tall image",
                confirmButtonColor: "#348cd4"
            })
        }),
        t("#sa-custom-position").click(function() {
            Swal.fire({
                position: "top-end",
                type: "success",
                title: "Your work has been saved",
                showConfirmButton: !1,
                timer: 1500
            })
        }),
        t("#sa-warning").click(function() {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#348cd4",
                cancelButtonColor: "#6c757d",
                confirmButtonText: "Yes, delete it!"
            }).then(function(t) {
                t.value && Swal.fire("Deleted!", "Your file has been deleted.", "success")
            })
        }),
        t("#sa-params").click(function() {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                confirmButtonClass: "btn btn-success mt-2",
                cancelButtonClass: "btn btn-danger ml-2 mt-2",
                buttonsStyling: !1
            }).then(function(t) {
                t.value ? Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    type: "success"
                }) : t.dismiss === Swal.DismissReason.cancel && Swal.fire({
                    title: "Cancelled",
                    text: "Your imaginary file is safe :)",
                    type: "error"
                })
            })
        }),
        t("#sa-image").click(function() {
            Swal.fire({
                text: "Responsive Bootstrap 4 Admin Dashboard",
                imageUrl: "assets/images/logo-dark.png",
                imageHeight: 20,
                animation: !1,
                confirmButtonColor: "#348cd4"
            })
        }),
        t("#sa-close").click(function() {
            var t;
            Swal.fire({
                title: "Auto close alert!",
                html: "I will close in <strong></strong> seconds.",
                timer: 2e3,
                onBeforeOpen: function() {
                    Swal.showLoading(),
                    t = setInterval(function() {
                        Swal.getContent().querySelector("strong").textContent = Swal.getTimerLeft()
                    }, 100)
                },
                onClose: function() {
                    clearInterval(t)
                }
            }).then(function(t) {
                t.dismiss === Swal.DismissReason.timer && console.log("I was closed by the timer")
            })
        }),
        t("#custom-html-alert").click(function() {
            Swal.fire({
                title: "<i>HTML</i> <u>example</u>",
                type: "info",
                html: 'You can use <b>bold text</b>, <a href="//coderthemes.com/">links</a> and other HTML tags',
                showCloseButton: !0,
                showCancelButton: !0,
                confirmButtonColor: "#348cd4",
                cancelButtonColor: "#f1556c",
                confirmButtonText: '<i class="mdi mdi-thumb-up-outline"></i> Great!',
                cancelButtonText: '<i class="mdi mdi-thumb-down-outline"></i>'
            })
        }),
        t("#custom-padding-width-alert").click(function() {
            Swal.fire({
                title: "Custom width, padding, background.",
                width: 600,
                padding: 100,
                confirmButtonColor: "#348cd4",
                background: "#fff url(//subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/geometry.png)"
            })
        }),
        t("#ajax-alert").click(function() {
            Swal.fire({
                title: "Submit your Github username",
                input: "text",
                inputAttributes: {
                    autocapitalize: "off"
                },
                showCancelButton: !0,
                confirmButtonText: "Look up",
                confirmButtonColor: "#348cd4",
                cancelButtonColor: "#6c757d",
                showLoaderOnConfirm: !0,
                preConfirm: function(t) {
                    return fetch("//api.github.com/users/" + t).then(function(t) {
                        if (!t.ok)
                            throw new Error(t.statusText);
                        return t.json()
                    }).catch(function(t) {
                        Swal.showValidationMessage("Request failed: " + t)
                    })
                },
                allowOutsideClick: function() {
                    Swal.isLoading();
                }
            }).then(function(t) {
                t.value && Swal.fire({
                    title: t.value.login + "'s avatar",
                    imageUrl: t.value.avatar_url
                })
            })
        }),
        t("#chaining-alert").click(function() {
            Swal.mixin({
                input: "text",
                confirmButtonText: "Next &rarr;",
                showCancelButton: !0,
                confirmButtonColor: "#348cd4",
                cancelButtonColor: "#6c757d",
                progressSteps: ["1", "2", "3"]
            }).queue([{
                title: "Question 1",
                text: "Chaining swal2 modals is easy"
            }, "Question 2", "Question 3"]).then(function(t) {
                t.value && Swal.fire({
                    title: "All done!",
                    html: "Your answers: <pre><code>" + JSON.stringify(t.value) + "</code></pre>",
                    confirmButtonText: "Lovely!"
                })
            })
        }),
        t("#dynamic-alert").click(function() {
            swal.queue([{
                title: "Your public IP",
                confirmButtonText: "Show my public IP",
                confirmButtonColor: "#348cd4",
                text: "Your public IP will be received via AJAX request",
                showLoaderOnConfirm: !0,
                preConfirm: function() {
                    return new Promise(function(e) {
                        t.get("https://api.ipify.org/?format=json").done(function(t) {
                            swal.insertQueueStep(t.ip),
                            e()
                        })
                    }
                    )
                }
            }])
        })
    }
    ,
    t.SweetAlert = new e,
    t.SweetAlert.Constructor = e
}(window.jQuery),
function(t) {
    "use strict";
    window.jQuery.SweetAlert.init()
}();
!function(n) {
    "use strict";
    var t = function() {};
    t.prototype.initTooltipPlugin = function() {
        n.fn.tooltip && n('[data-toggle="tooltip"]').tooltip()
    }
    ,
    t.prototype.initPopoverPlugin = function() {
        n.fn.popover && n('[data-toggle="popover"]').popover()
    }
    ,
    t.prototype.initSlimScrollPlugin = function() {
        n.fn.slimScroll && n(".slimscroll").slimScroll({
            height: "auto",
            position: "right",
            size: "5px",
            touchScrollStep: 20,
            color: "#9ea5ab"
        })
    }
    ,
    t.prototype.initCustomModalPlugin = function() {
        n('[data-plugin="custommodal"]').on("click", function(t) {
            t.preventDefault(),
            new Custombox.modal({
                content: {
                    target: n(this).attr("href"),
                    effect: n(this).attr("data-animation")
                },
                overlay: {
                    color: n(this).attr("data-overlayColor")
                }
            }).open()
        })
    }
    ,
    t.prototype.initCounterUp = function() {
        n(this).attr("data-delay") && n(this).attr("data-delay"),
        n(this).attr("data-time") && n(this).attr("data-time");
        n('[data-plugin="counterup"]').each(function(t, e) {
            n(this).counterUp({
                delay: 100,
                time: 1200
            })
        })
    }
    ,
    t.prototype.initPeityCharts = function() {
        n('[data-plugin="peity-pie"]').each(function(t, e) {
            var i = n(this).attr("data-colors") ? n(this).attr("data-colors").split(",") : []
              , a = n(this).attr("data-width") ? n(this).attr("data-width") : 20
              , o = n(this).attr("data-height") ? n(this).attr("data-height") : 20;
            n(this).peity("pie", {
                fill: i,
                width: a,
                height: o
            })
        }),
        n('[data-plugin="peity-donut"]').each(function(t, e) {
            var i = n(this).attr("data-colors") ? n(this).attr("data-colors").split(",") : []
              , a = n(this).attr("data-width") ? n(this).attr("data-width") : 20
              , o = n(this).attr("data-height") ? n(this).attr("data-height") : 20;
            n(this).peity("donut", {
                fill: i,
                width: a,
                height: o
            })
        }),
        n('[data-plugin="peity-donut-alt"]').each(function(t, e) {
            n(this).peity("donut")
        }),
        n('[data-plugin="peity-line"]').each(function(t, e) {
            n(this).peity("line", n(this).data())
        }),
        n('[data-plugin="peity-bar"]').each(function(t, e) {
            var i = n(this).attr("data-colors") ? n(this).attr("data-colors").split(",") : []
              , a = n(this).attr("data-width") ? n(this).attr("data-width") : 20
              , o = n(this).attr("data-height") ? n(this).attr("data-height") : 20;
            n(this).peity("bar", {
                fill: i,
                width: a,
                height: o
            })
        })
    }
    ,
    t.prototype.initKnob = function() {
        n('[data-plugin="knob"]').each(function(t, e) {
            n(this).knob()
        })
    }
    ,
    t.prototype.init = function() {
        this.initTooltipPlugin(),
        this.initPopoverPlugin(),
        this.initSlimScrollPlugin(),
        this.initCustomModalPlugin(),
        this.initCounterUp(),
        this.initPeityCharts(),
        this.initKnob()
    }
    ,
    n.Components = new t,
    n.Components.Constructor = t
}(window.jQuery),
function(o) {
    "use strict";
    var t = function() {
        this.$body = o("body"),
        this.$portletIdentifier = ".card",
        this.$portletCloser = '.card a[data-toggle="remove"]',
        this.$portletRefresher = '.card a[data-toggle="reload"]'
    };
    t.prototype.init = function() {
        var a = this;
        o(document).on("click", this.$portletCloser, function(t) {
            t.preventDefault();
            var e = o(this).closest(a.$portletIdentifier)
              , i = e.parent();
            e.remove(),
            0 == i.children().length && i.remove()
        }),
        o(document).on("click", this.$portletRefresher, function(t) {
            t.preventDefault();
            var e = o(this).closest(a.$portletIdentifier);
            e.append('<div class="card-disabled"><div class="card-portlets-loader"></div></div>');
            var i = e.find(".card-disabled");
            setTimeout(function() {
                i.fadeOut("fast", function() {
                    i.remove()
                })
            }, 500 + 5 * Math.random() * 300)
        })
    }
    ,
    o.Portlet = new t,
    o.Portlet.Constructor = t
}(window.jQuery),
function(e) {
    "use strict";
    var t = function() {
        this.$bootstrapStylesheet = e("#bootstrap-stylesheet"),
        this.$appStylesheet = e("#app-stylesheet"),
        this.$originalBSStylesheet = e("#bootstrap-stylesheet").attr("href"),
        this.$originalAppStylesheet = e("#app-stylesheet").attr("href")
    };
    t.prototype.init = function() {
        var t = this;
        e("#light-mode-switch").on("change", function() {
            this.checked && (t.$bootstrapStylesheet.attr("href", t.$originalBSStylesheet),
            t.$appStylesheet.attr("href", t.$originalAppStylesheet),
            e("#dark-mode-switch").prop("checked", !1),
            e("#rtl-mode-switch").prop("checked", !1))
        }),
        e("#dark-mode-switch").on("change", function() {
            this.checked && (t.$bootstrapStylesheet.attr("href", e(this).data("bsstyle")),
            t.$appStylesheet.attr("href", e(this).data("appstyle")),
            e("#light-mode-switch").prop("checked", !1),
            e("#rtl-mode-switch").prop("checked", !1))
        }),
        e("#rtl-mode-switch").on("change", function() {
            this.checked && (t.$bootstrapStylesheet.attr("href", t.$originalBSStylesheet),
            t.$appStylesheet.attr("href", e(this).data("appstyle")),
            e("#light-mode-switch").prop("checked", !1),
            e("#dark-mode-switch").prop("checked", !1))
        })
    }
    ,
    e.RightSidebar = new t,
    e.RightSidebar.Constructor = t
}(window.jQuery),
function(i) {
    "use strict";
    var t = function() {
        this.$body = i("body"),
        this.$window = i(window)
    };
    t.prototype._resetSidebarScroll = function() {
        i(".slimscroll-menu").slimscroll({
            height: "auto",
            position: "right",
            size: "5px",
            color: "#9ea5ab",
            wheelStep: 5,
            touchScrollStep: 20
        })
    }
    ,
    t.prototype.initMenu = function() {
        var e = this;
        i(".button-menu-mobile").on("click", function(t) {
            t.preventDefault(),
            e.$body.toggleClass("sidebar-enable"),
            768 <= e.$window.width() ? e.$body.toggleClass("enlarged") : e.$body.removeClass("enlarged"),
            e._resetSidebarScroll()
        }),
        i("#side-menu").metisMenu(),
        e._resetSidebarScroll(),
        i(".right-bar-toggle").on("click", function(t) {
            i("body").toggleClass("right-bar-enabled")
        }),
        i(document).on("click", "body", function(t) {
            0 < i(t.target).closest(".right-bar-toggle, .right-bar").length || 0 < i(t.target).closest(".left-side-menu, .side-nav").length || i(t.target).hasClass("button-menu-mobile") || 0 < i(t.target).closest(".button-menu-mobile").length || (i("body").removeClass("right-bar-enabled"),
            i("body").removeClass("sidebar-enable"))
        }),
        i("#side-menu a").each(function() {
            var t = window.location.href.split(/[?#]/)[0];
            this.href == t && (i(this).addClass("active"),
            i(this).parent().addClass("mm-active"),
            i(this).parent().parent().addClass("mm-show"),
            i(this).parent().parent().prev().addClass("active"),
            i(this).parent().parent().parent().addClass("mm-active"),
            i(this).parent().parent().parent().parent().addClass("mm-show"),
            i(this).parent().parent().parent().parent().parent().addClass("mm-active"))
        }),
        i(".navigation-menu a").each(function() {
            var t = window.location.href.split(/[?#]/)[0];
            this.href == t && (i(this).addClass("active"),
            i(this).parent().addClass("active"),
            i(this).parent().parent().addClass("in"),
            i(this).parent().parent().prev().addClass("active"),
            i(this).parent().parent().parent().addClass("active"),
            i(this).parent().parent().parent().parent().addClass("in"),
            i(this).parent().parent().parent().parent().parent().addClass("active"))
        }),
        i(".navbar-toggle").on("click", function(t) {
            i(this).toggleClass("open"),
            i("#navigation").slideToggle(400)
        }),
        i(".navigation-menu>li").slice(-1).addClass("last-elements"),
        i('.navigation-menu li.has-submenu a[href="#"]').on("click", function(t) {
            i(window).width() < 992 && (t.preventDefault(),
            i(this).parent("li").toggleClass("open").find(".submenu:first").toggleClass("open"))
        })
    }
    ,
    t.prototype.initLayout = function() {
        768 <= this.$window.width() && this.$window.width() <= 1024 ? this.$body.addClass("enlarged") : 1 != this.$body.data("keep-enlarged") && this.$body.removeClass("enlarged")
    }
    ,
    t.prototype.init = function() {
        var e = this;
        this.initLayout(),
        i.Portlet.init(),
        this.initMenu(),
        i.Components.init(),
        i.RightSidebar.init(),
        e.$window.on("resize", function(t) {
            t.preventDefault(),
            e.initLayout(),
            e._resetSidebarScroll()
        })
    }
    ,
    i.App = new t,
    i.App.Constructor = t
}(window.jQuery),
function(t) {
    "use strict";
    window.jQuery.App.init()
}(),
Waves.init();
//# sourceMappingURL=app.min.js.map

$(function() {
    var k, f = -1, m = 0;
    $("#showtoast").click(function() {
        var t, o, e = $("#toastTypeGroup input:radio:checked").val(), a = $("#message").val(), n = $("#title").val() || "", s = $("#showDuration"), i = $("#hideDuration"), r = $("#timeOut"), l = $("#extendedTimeOut"), c = $("#showEasing"), p = $("#hideEasing"), d = $("#showMethod"), h = $("#hideMethod"), u = m++, g = $("#addClear").prop("checked");
        toastr.options = {
            closeButton: $("#closeButton").prop("checked"),
            debug: $("#debugInfo").prop("checked"),
            newestOnTop: $("#newestOnTop").prop("checked"),
            progressBar: $("#progressBar").prop("checked"),
            positionClass: $("#positionGroup input:radio:checked").val() || "toast-top-right",
            preventDuplicates: $("#preventDuplicates").prop("checked"),
            onclick: null
        },
        $("#addBehaviorOnToastClick").prop("checked") && (toastr.options.onclick = function() {
            alert("You can perform some custom action after a toast goes away")
        }
        ),
        s.val().length && (toastr.options.showDuration = s.val()),
        i.val().length && (toastr.options.hideDuration = i.val()),
        r.val().length && (toastr.options.timeOut = g ? 0 : r.val()),
        l.val().length && (toastr.options.extendedTimeOut = g ? 0 : l.val()),
        c.val().length && (toastr.options.showEasing = c.val()),
        p.val().length && (toastr.options.hideEasing = p.val()),
        d.val().length && (toastr.options.showMethod = d.val()),
        h.val().length && (toastr.options.hideMethod = h.val()),
        g && (t = (t = a) || "Clear itself?",
        a = t += '<br /><br /><button type="button" class="btn btn-secondary clear">Yes</button>',
        toastr.options.tapToDismiss = !1),
        a || (++f === (o = ["My name is Inigo Montoya. You killed my father. Prepare to die!", "Are you the six fingered man?", "Inconceivable!", "I do not think that means what you think it means.", "Have fun storming the castle!"]).length && (f = 0),
        a = o[f]),
        $("#toastrOptions").text('Command: toastr["' + e + '"]("' + a + (n ? '", "' + n : "") + '")\n\ntoastr.options = ' + JSON.stringify(toastr.options, null, 2));
        var v = toastr[e](a, n);
        void 0 !== (k = v) && (v.find("#okBtn").length && v.delegate("#okBtn", "click", function() {
            alert("you clicked me. i was toast #" + u + ". goodbye!"),
            v.remove()
        }),
        v.find("#surpriseBtn").length && v.delegate("#surpriseBtn", "click", function() {
            alert("Surprise! you clicked me. i was toast #" + u + ". You could perform an action here.")
        }),
        v.find(".clear").length && v.delegate(".clear", "click", function() {
            toastr.clear(v, {
                force: !0
            })
        }))
    }),
    $("#clearlasttoast").click(function() {
        toastr.clear(k)
    }),
    $("#cleartoasts").click(function() {
        toastr.clear()
    })
});
