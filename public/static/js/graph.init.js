$(document).ready(function(){
    try {
        Morris.Line({
            element: "morris-line-example",
            data: [{
                y: "2012",
                a: 75,
                b: 65
            }, {
                y: "2013",
                a: 50,
                b: 40
            }, {
                y: "2014",
                a: 75,
                b: 65
            }, {
                y: "2015",
                a: 100,
                b: 90
            }],
            xkey: "y",
            gridLineColor: "rgba(108, 120, 151, 0.1)",
            ykeys: ["a", "b"],
            labels: ["Series A", "Series B"],
            resize: !0,
            hideHover: "auto",
            lineColors: ["#1a2942", "#3bc0c3"]
        }),
        Morris.Bar({
                element: "morris-bar-example",
                data: [{
                    y: "Dimanche",
                    a: 100,
                    b: 90,
                    c: 80
                }, {
                    y: "Lundi",
                    a: 100,
                    b: 90,
                    c: 90
                }, {
                    y: "Mardi",
                    a: 75,
                    b: 65,
                    c: 95
                }, {
                    y: "Mercredi",
                    a: 50,
                    b: 40,
                    c: 22
                }, {
                    y: "Jeudi",
                    a: 75,
                    b: 65,
                    c: 56
                }, {
                    y: "Vendredi",
                    a: 100,
                    b: 90,
                    c: 60
                }, {
                    y: "Samedi",
                    a: 100,
                    b: 90,
                    c: 60
                }],
                xkey: "y",
                ykeys: ["a", "b", "c"],
                gridLineColor: "rgba(108, 120, 151, 0.1)",
                hideHover: "auto",
                resize: !0,
                labels: ["Series A", "Series B", "Series c"],
                barColors: ["#3bc0c3", "#1a2942", "#dcdcdc"]
            });
        $(".sparkpie-big").sparkline([3, 4, 1, 2], {
            type: "pie",
            width: "100%",
            height: "50",
            sliceColors: ["#1a2942", "#f13c6e", "#3bc0c3", "#dcdcdc"],
            offset: 0,
            borderWidth: 0,
            borderColor: "#00007f"
        });
    }catch (e) {
        console.trace("Raphael sent error");
        console.warn("Raphael sent error");
    }
})