// ! function (t, s) {
//     "function" == typeof define && define.amd ? define([], s) : "object" == typeof exports ? module.exports = s() : t.ToProgress = s()
// }(this, function () {
//     function t() {
//         var t, s = document.createElement("fakeelement"),
//             i = {
//                 transition: "transitionend",
//                 OTransition: "oTransitionEnd",
//                 MozTransition: "transitionend",
//                 WebkitTransition: "webkitTransitionEnd"
//             };
//         for (t in i)
//             if (void 0 !== s.style[t]) return i[t]
//     }

//     function s(t, s) {
//         if (this.progress = 0, this.options = {
//                 id: "top-progress-bar",
//                 color: "#F44336",
//                 height: "2px",
//                 duration: .2
//             }, t && "object" == typeof t)
//             for (var i in t) this.options[i] = t[i];
//         if (this.options.opacityDuration = 3 * this.options.duration, this.progressBar = document.createElement("div"), this.progressBar.id = this.options.id, this.progressBar.setCSS = function (t) {
//                 for (var s in t) this.style[s] = t[s]
//             }, this.progressBar.setCSS({
//                 position: s ? "relative" : "fixed",
//                 top: "0",
//                 left: "0",
//                 right: "0",
//                 "background-color": this.options.color,
//                 height: this.options.height,
//                 width: "0%",
//                 transition: "width " + this.options.duration + "s, opacity " + this.options.opacityDuration + "s",
//                 "-moz-transition": "width " + this.options.duration + "s, opacity " + this.options.opacityDuration + "s",
//                 "-webkit-transition": "width " + this.options.duration + "s, opacity " + this.options.opacityDuration + "s"
//             }), s) {
//             var o = document.querySelector(s);
//             o && (o.hasChildNodes() ? o.insertBefore(this.progressBar, o.firstChild) : o.appendChild(this.progressBar))
//         } else document.body.appendChild(this.progressBar)
//     }
//     var i = t();
//     return s.prototype.transit = function () {
//         this.progressBar.style.width = this.progress + "%"
//     }, s.prototype.getProgress = function () {
//         return this.progress
//     }, s.prototype.setProgress = function (t, s) {
//         this.show(), this.progress = t > 100 ? 100 : 0 > t ? 0 : t, this.transit(), s && s()
//     }, s.prototype.increase = function (t, s) {
//         this.show(), this.setProgress(this.progress + t, s)
//     }, s.prototype.decrease = function (t, s) {
//         this.show(), this.setProgress(this.progress - t, s)
//     }, s.prototype.finish = function (t) {
//         var s = this;
//         this.setProgress(100, t), this.hide(), i && this.progressBar.addEventListener(i, function (t) {
//             s.reset(), s.progressBar.removeEventListener(t.type, arguments.callee)
//         })
//     }, s.prototype.reset = function (t) {
//         this.progress = 0, this.transit(), t && t()
//     }, s.prototype.hide = function () {
//         this.progressBar.style.opacity = "0"
//     }, s.prototype.show = function () {
//         this.progressBar.style.opacity = "1"
//     }, s
// });
