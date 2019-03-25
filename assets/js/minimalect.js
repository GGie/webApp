/************************************
          MINIMALECT 0.8b
  A minimalistic select replacement
        http://git.io/Xedg9w
************************************/
(function(e, t, n, r) {
    function o(t, n) {
        this.element = e(t);
        this.options = e.extend({}, s, n);
        this._defaults = s;
        this._name = i;
        this.init()
    }
    var i = "minimalect",
        s = {
            theme: "",
            placeholder: "Select a choice",
            empty: "No results match your keyword.",
            class_container: "minict_wrapper",
            class_group: "minict_group",
            class_empty: "minict_empty",
            class_active: "active",
            class_selected: "selected",
            class_hidden: "hidden",
            class_highlighted: "highlighted",
            class_first: "minict_first",
            class_last: "minict_last",
            beforeinit: function() {},
            afterinit: function() {},
            onchange: function() {},
            onopen: function() {},
            onclose: function() {},
            onfilter: function() {},
            onReset: function() {}
        };
    o.prototype = {
        init: function() {
            this.options.beforeinit();
            var t = this;
            this.wrapper = e('<div class="' + this.options.class_container + '"></div>');
            this.element.hide().after(this.wrapper);
            if (this.options.theme) this.wrapper.addClass(this.options.theme);
            this.wrapper.append('<input required="true" type="text" value="' + (this.element.find("option[selected]").html() || "") + '" placeholder="' + (this.element.find("option[selected]").html() || this.options.placeholder) + '" />');
            this.wrapper.append("<ul>" + t.parseSelect(t.element, t.options) + '<li class="' + t.options.class_empty + '">' + t.options.empty + "</li></ul>");
            if (this.element.find("option[selected]").length > 0) this.wrapper.find('li[data-value="' + this.element.find("option[selected]").val() + '"]').addClass(t.options.class_selected);
            t.element.on("change", function() {
                var e = t.wrapper.find("li." + t.options.class_selected),
                    n = t.parseSelect(t.element, t.options);
                if (t.element.val() != e.attr("data-value")) {
                    t.hideChoices(t.wrapper, t.options, function() {
                        t.wrapper.children("ul").html(n + '<li class="' + t.options.class_empty + '">' + t.options.empty + "</li>");
                        t.selectChoice(t.wrapper.find('li[data-value="' + t.element.val() + '"]'), t.wrapper, t.element, t.options)
                    })
                }
            });
            e(n).on("click", function() {
                t.hideChoices(t.wrapper, t.options)
            });
            this.wrapper.on("click", function(e) {
                e.stopPropagation();
                t.toggleChoices(t.wrapper, t.options)
            });
            this.wrapper.on("click", "li:not(." + t.options.class_group + ", ." + t.options.class_empty + ")", function() {
                t.selectChoice(e(this), t.wrapper, t.element, t.options)
            });
            this.wrapper.on("click", "li." + t.options.class_group + ", li." + t.options.class_empty, function(e) {
                e.stopPropagation();
                t.wrapper.children("input").focus()
            });
            this.wrapper.find("input").on("focus click", function(e) {
                e.stopPropagation();
                t.showChoices(t.wrapper, t.options)
            }).on("keyup", function(e) {
                switch (e.keyCode) {
                    case 38:
                        t.navigateChoices("up", t.wrapper, t.options);
                        return false;
                        break;
                    case 40:
                        t.navigateChoices("down", t.wrapper, t.options);
                        return false;
                        break;
                    case 13:
                        if (t.wrapper.find("li." + t.options.class_highlighted).length != 0) t.selectChoice(t.wrapper.find("li." + t.options.class_highlighted), t.wrapper, t.element, t.options);
                        else t.selectChoice(t.wrapper.find("li:not(." + t.options.class_group + ", ." + t.options.class_empty + ")").first(), t.wrapper, t.element, t.options);
                        t.hideChoices(t.wrapper, t.options);
                        return false;
                        break
                }
                t.filterChoices(t.wrapper, t.options)
            });
            this.options.afterinit()
        },
        navigateChoices: function(e, t, n) {
            ignored = "." + n.class_hidden + ", ." + n.class_empty + ", ." + n.class_group;
            if (t.find("li." + n.class_highlighted).length == 0) {
                if (e == "up") {
                    t.find("li:not(" + ignored + ")").last().addClass(n.class_highlighted)
                } else if (e == "down") {
                    t.find("li:not(" + ignored + ")").first().addClass(n.class_highlighted)
                }
                return false
            } else {
                cur = t.find("li." + n.class_highlighted);
                cur.removeClass(n.class_highlighted);
                if (e == "up") {
                    if (t.find("li:not(" + ignored + ")").first()[0] != cur[0]) {
                        cur.prevAll("li").not(ignored).first().addClass(n.class_highlighted);
                        var r = t.children("ul"),
                            i = t.find("li." + n.class_highlighted).offset().top - r.offset().top + r.scrollTop();
                        if (r.scrollTop() > i) r.scrollTop(i)
                    } else {
                        t.find("li:not(" + ignored + ")").last().addClass(n.class_highlighted);
                        t.children("ul").scrollTop(t.children("ul").height())
                    }
                } else if (e == "down") {
                    if (t.find("li:not(" + ignored + ")").last()[0] != cur[0]) {
                        cur.nextAll("li").not(ignored).first().addClass(n.class_highlighted);
                        var r = t.children("ul"),
                            s = r.height(),
                            o = t.find("li." + n.class_highlighted).offset().top - r.offset().top + t.find("li." + n.class_highlighted).outerHeight();
                        if (s < o) r.scrollTop(r.scrollTop() + o - s)
                    } else {
                        t.find("li:not(" + ignored + ")").first().addClass(n.class_highlighted);
                        t.children("ul").scrollTop(0)
                    }
                }
            }
        },
        parseSelect: function(t, n) {
            var r = "",
                i = this;
            if (t.find("optgroup").length == 0) {
                r = this.parseElements(t.html())
            } else {
                t.find("optgroup").each(function() {
                    r += '<li class="' + n.class_group + '">' + e(this).attr("label") + "</li>";
                    r += i.parseElements(e(this).html())
                })
            }
            return r
        },
        parseElements: function(t) {
            var n = "";
            e(e.trim(t)).filter("option").each(function() {
                n += '<li data-value="' + e(this).val() + '">' + e(this).text() + "</li>"
            });
            return n
        },
        toggleChoices: function(e, t) {
            !e.hasClass(t.class_active) ? this.showChoices(e, t) : this.hideChoices(e, t)
        },
        showChoices: function(t, n, r) {
            if (!t.hasClass(n.class_active)) {
                this.updateFirstLast(false, t, n);
                var i = this;
                e("." + n.class_container).each(function() {
                    if (e(this)[0] != t[0]) i.hideChoices(e(this), n)
                });
                if (typeof r == "function") r.call();
                t.addClass(n.class_active).children("ul").fadeIn(150);
                t.children("input").val("").focus();
                this.options.onopen()
            } else {
                if (typeof r == "function") r.call()
            }
        },
        hideChoices: function(e, t, n) {
            if (e.hasClass(t.class_active)) {
                e.removeClass(t.class_active).children("ul").fadeOut(100, function() {
                    e.find("li").removeClass(t.class_hidden);
                    e.find("." + t.class_empty).hide();
                    e.find("li." + t.class_highlighted).removeClass(t.class_highlighted);
                    if (typeof n == "function") n.call()
                });
                e.children("input").blur();
                if (e.children("input").attr("placeholder") != t.placeholder) {
                    e.children("input").val(e.children("input").attr("placeholder"))
                } else if (e.find("li." + t.class_selected).length == 0) {
                    e.children("input").val("")
                }
                this.options.onclose()
            } else {
                if (typeof n == "function") n.call()
            }
        },
        filterChoices: function(t, n) {
            var r = t.children("input").val();
            t.find("li." + n.class_highlighted).removeClass(n.class_highlighted);
            t.find("li:not(" + n.class_group + ")").each(function() {
                if (e(this).text().search(new RegExp(r, "i")) < 0) e(this).addClass(n.class_hidden);
                else e(this).removeClass(n.class_hidden)
            });
            t.find("li." + n.class_group).removeClass(n.class_hidden).each(function() {
                nextlis = e(this).nextAll("li").not("." + n.class_hidden + ", ." + n.class_empty);
                if (nextlis.first().hasClass(n.class_group) || nextlis.length == 0) e(this).addClass(n.class_hidden)
            });
            t.find("." + n.class_empty).hide();
            if (t.find("li").not("." + n.class_hidden + ", ." + n.class_empty).length == 0) {
                t.find("." + n.class_empty).show();
                this.options.onfilter(false)
            } else {
                this.options.onfilter(true)
            }
            this.updateFirstLast(true, t, n)
        },
        selectChoice: function(e, t, n, r) {
            t.find("li").removeClass(r.class_selected);
            e.addClass(r.class_selected);
            t.children("input").val(e.text()).attr("placeholder", e.text());
            n.find("option[selected]").removeAttr("selected");
            n.find('option[value="' + e.attr("data-value") + '"]').attr("selected", "selected");
            this.options.onchange(e.attr("data-value"), e.text())
        },
        updateFirstLast: function(e, t, n) {
            t.find("." + n.class_first + ", ." + n.class_last).removeClass(n.class_first + " " + n.class_last);
            if (e) {
                t.find("li:visible").first().addClass(n.class_first);
                t.find("li:visible").last().addClass(n.class_last)
            } else {
                t.find("li").first().addClass(n.class_first);
                t.find("li").not("." + n.class_empty).last().addClass(n.class_last)
            }
        },
        // uninit Minimalect
		destroy: function(){
			// remove (and automatically unbind) all Minimalect stuff
			this.wrapper.remove();
			// display and unhook the original
			this.element.off("change focus blur").show();
			// stop listening for changes
			if (window.MutationObserver)
				this.observer.disconnect();

			// if debug mode is on, let them know upstairs
			if(this.options.debug) console.log("Minimalect destroyed for ", this.element);
			this.options.onReset();
		},
    };
    e.fn[i] = function(t) {
        return this.each(function() {
            if (!e.data(this, "plugin_" + i)) {
                e.data(this, "plugin_" + i, new o(this, t))
            }
        })
    }
})(jQuery, window, document)