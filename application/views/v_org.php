<html>
<head>
    <title><?php echo $title; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand" rel="stylesheet">
    <script src="js/orgChart.js"></script>
    
</head>
<body onload="blockFirstDelButton()">
 
  <h3 align="center">Org-Chart</h3>
    <div id="orgChartContainer">
      <div id="orgChart"></div>
    </div>
</body>

<div id="tree"></div>
    <script>
    

var chart;
window.onload = function () {
    chart = new OrgChart(document.getElementById("tree"), {
        template: "luba",
        layout: OrgChart.mixed,
        mouseScrool: OrgChart.none,
        menu: {
            pdfPreview: { 
                text: "PDF Preview", 
                icon: OrgChart.icon.pdf(24,24, '#7A7A7A'),
                onClick: preview
            },
            pdf: { text: "Export PDF" },
            png: { text: "Export PNG" },
            svg: { text: "Export SVG" },
            csv: { text: "Export CSV" }
        },
        nodeMenu: {
            pdf: { text: "Export PDF" },
            png: { text: "Export PNG" },
            svg: { text: "Export SVG" }
        },
        nodeBinding: {
            field_0: "name",
            field_1: "title",
            img_0: "img"
        },
      
        nodes:  <?php echo json_encode($database);?>
        /*[
            { id: "1", name: "Edwin Syafriana Randy", title: "Chairman and CEO", email: "amber@domain.com", img: "images/1.png" },
            { id: "2", pid: "1", name: "Faiz", title: "QA Lead", email: "ava@domain.com", img: "images/2.png" },
            { id: "3", pid: "1", name: "Mila", title: "Technical Director", img: "images/2.png" },
            { id: "4", pid: "3", name: "Mitha", title: "Manager", email: "jay@domain.com", img: "images/2.png" },
            { id: "5", pid: "2", name: "Amelia", title: "QA", img: "images/2.png" },
           
        ]*/
    });

    function preview(){
        OrgChart.pdfPrevUI.show(chart, {
            format: 'A4'
        });
    }
};

    </script>
</body>
</html>
</html>