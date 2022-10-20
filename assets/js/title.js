(function(c, a, m) {
    var title = (c || document.title) + " " + (a || "-") + " ";
    setInterval(function() {
        title = title.substring(1) + title.charAt(0);
        document.title = title;
    }, m || 300);
})(
    /* Tab Text */ "\n" +
    "L1 Puissance4 EMN",
    /* Title Repeat Separator */ "- ENJOY - ",
    /* Scroll Speed (in milleseconds) */ 200
);