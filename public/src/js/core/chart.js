////Bar Chart

///Bar Chart

am5.ready(function () {
  // Create root2 element
  // https://www.amcharts.com/docs/v5/getting-started/#Root2_element
  var root4 = am5.Root.new("chartdiv");

  // Set themes
  // https://www.amcharts.com/docs/v5/concepts/themes/
  root4.setThemes([am5themes_Animated.new(root4)]);

  root4.dateFormatter.setAll({
    dateFormat: "yyyy-MM-dd",
    dateFields: ["valueX"],
  });

  var data = [
    {
      date: "2021-01-01",
      steps: 4561,
    },
    {
      date: "2021-01-02",
      steps: 5687,
    },
    {
      date: "2021-01-03",
      steps: 6348,
    },
    {
      date: "2021-01-04",
      steps: 4878,
    },
    {
      date: "2021-01-05",
      steps: 9867,
    },
    {
      date: "2021-01-06",
      steps: 7561,
    },
    {
      date: "2021-01-07",
      steps: 1287,
    },
    {
      date: "2021-01-08",
      steps: 3298,
    },
    {
      date: "2021-01-09",
      steps: 5697,
    },
    {
      date: "2021-01-10",
      steps: 4878,
    },
    {
      date: "2021-01-11",
      steps: 8788,
    },
    {
      date: "2021-01-12",
      steps: 9560,
    },
    {
      date: "2021-01-13",
      steps: 11687,
    },
    {
      date: "2021-01-14",
      steps: 5878,
    },
    {
      date: "2021-01-15",
      steps: 9789,
    },
    {
      date: "2021-01-16",
      steps: 3987,
    },
    {
      date: "2021-01-17",
      steps: 5898,
    },
    {
      date: "2021-01-18",
      steps: 9878,
    },
    {
      date: "2021-01-19",
      steps: 13687,
    },
    {
      date: "2021-01-20",
      steps: 6789,
    },
    {
      date: "2021-01-21",
      steps: 4531,
    },
    {
      date: "2021-01-22",
      steps: 5856,
    },
    {
      date: "2021-01-23",
      steps: 5737,
    },
    {
      date: "2021-01-24",
      steps: 9987,
    },
    {
      date: "2021-01-25",
      steps: 16457,
    },
    {
      date: "2021-01-26",
      steps: 7878,
    },
    {
      date: "2021-01-27",
      steps: 6845,
    },
    {
      date: "2021-01-28",
      steps: 4659,
    },
    {
      date: "2021-01-29",
      steps: 7892,
    },
    {
      date: "2021-01-30",
      steps: 7362,
    },
    {
      date: "2021-01-31",
      steps: 3268,
    },
  ];

  // Create chart
  // https://www.amcharts.com/docs/v5/charts/xy-chart/
  var chart = root4.container.children.push(
    am5xy.XYChart.new(root4, {
      focusable: true,
      panX: true,
      panY: false,
      wheelX: "panX",
      wheelY: "none",
    })
  );

  var easing = am5.ease.linear;

  // hide zoomout button
  chart.zoomOutButton.set("forceHidden", true);

  // add label
  chart.plotContainer.children.push(
    am5.Label.new(root4, { text: "Pan chart to change date", x: 100, y: 50 })
  );

  // Create axes
  // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
  var xRenderer = am5xy.AxisRendererX.new(root4, {
    minGridDistance: 50,
    strokeOpacity: 0.2,
  });
  xRenderer.grid.template.set("forceHidden", true);

  var xAxis = chart.xAxes.push(
    am5xy.DateAxis.new(root4, {
      maxDeviation: 0.49,
      snapTooltip: false,
      baseInterval: {
        timeUnit: "day",
        count: 1,
      },
      renderer: xRenderer,
      tooltip: am5.Tooltip.new(root4, {}),
    })
  );

  var yRenderer = am5xy.AxisRendererY.new(root4, { inside: true });
  yRenderer.grid.template.set("forceHidden", true);

  var yAxis = chart.yAxes.push(
    am5xy.ValueAxis.new(root4, {
      maxDeviation: 0,
      renderer: yRenderer,
    })
  );

  // Add series
  // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
  var series = chart.series.push(
    am5xy.ColumnSeries.new(root4, {
      xAxis: xAxis,
      yAxis: yAxis,
      valueYField: "steps",
      valueXField: "date",
      tooltip: am5.Tooltip.new(root4, {
        pointerOrientation: "vertical",
        labelText: "{valueY}",
      }),
    })
  );

  series.columns.template.setAll({
    cornerRadiusTL: 15,
    cornerRadiusTR: 15,
    maxWidth: 30,
    strokeOpacity: 0,
  });

  series.columns.template.adapters.add("fill", function (fill, target) {
    if (target.dataItem.get("valueY") < 6000) {
      return am5.color(0xdadada);
    }
    return fill;
  });

  // Set up data processor to parse string dates
  // https://www.amcharts.com/docs/v5/concepts/data/#Pre_processing_data
  series.data.processor = am5.DataProcessor.new(root4, {
    dateFormat: "yyyy-MM-dd",
    dateFields: ["date"],
  });

  series.data.setAll(data);

  // do not allow tooltip  to move horizontally
  series.get("tooltip").adapters.add("x", function (x) {
    return chart.plotContainer.toGlobal({
      x: chart.plotContainer.width() / 2,
      y: 0,
    }).x;
  });

  // add ranges
  var goalRange = yAxis.createAxisRange(
    yAxis.makeDataItem({
      value: 6000,
    })
  );

  goalRange.get("grid").setAll({
    forceHidden: false,
    strokeOpacity: 0.2,
  });

  var goalLabel = goalRange.get("label");

  goalLabel.setAll({
    centerY: am5.p100,
    centerX: am5.p100,
    text: "Goal",
  });

  // put to other side
  goalLabel.adapters.add("x", function (x) {
    return chart.plotContainer.width();
  });

  var goalRange2 = yAxis.createAxisRange(
    yAxis.makeDataItem({
      value: 12000,
    })
  );

  goalRange2.get("grid").setAll({
    forceHidden: false,
    strokeOpacity: 0.2,
  });

  var goalLabel2 = goalRange2.get("label");

  goalLabel2.setAll({
    centerY: am5.p100,
    centerX: am5.p100,
    text: "2 x Goal",
  });

  // put to other side
  goalLabel2.adapters.add("x", function (x) {
    return chart.plotContainer.width();
  });

  // reposition when width changes
  chart.plotContainer.onPrivate("width", function () {
    goalLabel.markDirtyPosition();
    goalLabel2.markDirtyPosition();
  });

  // Add cursor
  // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
  var cursor = chart.set(
    "cursor",
    am5xy.XYCursor.new(root4, {
      alwaysShow: true,
      behavior: "none",
      positionX: 0.5, // make it always be at the center
    })
  );
  cursor.lineY.set("visible", false);

  // zoom to last 11 days
  series.events.on("datavalidated", function () {
    var toTime =
      series.dataItems[series.dataItems.length - 1].get("valueX") +
      am5.time.getDuration("day", 1);
    var fromTime = series.dataItems[series.dataItems.length - 11].get("valueX");

    xAxis.zoomToValues(fromTime, toTime);
  });

  // when plot are is released, round zoom to nearest days
  chart.plotContainer.events.on("globalpointerup", function () {
    var dayDuration = am5.time.getDuration("day", 1);

    var firstTime = am5.time
      .round(new Date(series.dataItems[0].get("valueX")), "day", 1)
      .getTime();
    var lastTime =
      series.dataItems[series.dataItems.length - 1].get("valueX") + dayDuration;
    var totalTime = lastTime - firstTime;
    var days = totalTime / dayDuration;

    var roundedStart =
      firstTime + Math.round(days * xAxis.get("start")) * dayDuration;
    var roundedEnd =
      firstTime + Math.round(days * xAxis.get("end")) * dayDuration;

    xAxis.zoomToValues(roundedStart, roundedEnd);
  });

  // Make stuff animate on load
  // https://www.amcharts.com/docs/v5/concepts/animations/
  chart.appear(1000, 50);
}); // end am5.ready()

////Pie Chart
am5.ready(function () {
  // Create root4 element
  // https://www.amcharts.com/docs/v5/getting-started/#Root_element
  var root2 = am5.Root.new("chartdiv2");

  // Set themes
  // https://www.amcharts.com/docs/v5/concepts/themes/
  root2.setThemes([am5themes_Animated.new(root2)]);

  // Create chart
  // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
  // start and end angle must be set both for chart and series
  var chart = root2.container.children.push(
    am5percent.PieChart.new(root2, {
      layout: root2.verticalLayout,
    })
  );

  // Create series
  // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
  // start and end angle must be set both for chart and series
  var series0 = chart.series.push(
    am5percent.PieSeries.new(root2, {
      valueField: "value",
      categoryField: "category",
      alignLabels: false,
      radius: am5.percent(100),
      innerRadius: am5.percent(80),
    })
  );

  series0.states.create("hidden", {
    startAngle: 180,
    endAngle: 180,
  });

  series0.slices.template.setAll({
    fillOpacity: 0.5,
    strokeOpacity: 0,
    templateField: "settings",
  });

  series0.slices.template.states.create("hover", { scale: 1 });
  series0.slices.template.states.create("active", { shiftRadius: 0 });

  series0.labels.template.setAll({
    templateField: "settings",
  });

  series0.ticks.template.setAll({
    templateField: "settings",
  });

  series0.labels.template.setAll({
    textType: "circular",
    radius: 30,
  });

  // Set data
  // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
  series0.data.setAll([
    {
      category: "First + Second",
      value: 60,
    },
    {
      category: "Unused",
      value: 30,
      settings: { forceHidden: true },
    },
  ]);

  // Create series
  // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
  // start and end angle must be set both for chart and series
  var series1 = chart.series.push(
    am5percent.PieSeries.new(root2, {
      radius: am5.percent(95),
      innerRadius: am5.percent(85),
      valueField: "value",
      categoryField: "category",
      alignLabels: false,
    })
  );

  series1.states.create("hidden", {
    startAngle: 180,
    endAngle: 180,
  });

  series1.slices.template.setAll({
    templateField: "sliceSettings",
    strokeOpacity: 0,
  });

  series1.labels.template.setAll({
    textType: "circular",
  });

  series1.labels.template.adapters.add("radius", function (radius, target) {
    var dataItem = target.dataItem;
    var slice = dataItem.get("slice");
    return -(slice.get("radius") - slice.get("innerRadius")) / 2 - 10;
  });

  series1.slices.template.states.create("hover", { scale: 1 });
  series1.slices.template.states.create("active", { shiftRadius: 0 });

  series1.ticks.template.setAll({
    forceHidden: true,
  });

  // Set data
  // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
  series1.data.setAll([
    {
      category: "First",
      value: 30,
    },
    {
      category: "Second",
      value: 30,
    },
    {
      category: "Remaining",
      value: 30,
      sliceSettings: { fill: am5.color(0xdedede) },
    },
  ]);
}); // end am5.ready()


///Line Chart

am5.ready(function () {
  // Create root element
  // https://www.amcharts.com/docs/v5/getting-started/#Root_element
  var root3 = am5.Root.new("chartdiv3");

  // Set themes
  // https://www.amcharts.com/docs/v5/concepts/themes/
  root3.setThemes([am5themes_Animated.new(root3)]);

  // Create chart
  // https://www.amcharts.com/docs/v5/charts/xy-chart/
  var chart = root3.container.children.push(
    am5xy.XYChart.new(root3, {
      panX: false,
      panY: false,
      wheelX: "none",
      wheelY: "none",
      layout: root3.verticalLayout,
    })
  );

  // Data
  var data = [
    {
      year: "2015",
      value: 600000,
    },
    {
      year: "2016",
      value: 900000,
    },
    {
      year: "2017",
      value: 180000,
    },
    {
      year: "2018",
      value: 600000,
    },
    {
      year: "2019",
      value: 350000,
    },
    {
      year: "2020",
      value: 600000,
    },
    {
      year: "2021",
      value: 670000,
    },
  ];

  // Populate data
  for (var i = 0; i < data.length - 1; i++) {
    data[i].valueNext = data[i + 1].value;
  }

  // Create axes
  // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
  var xAxis = chart.xAxes.push(
    am5xy.CategoryAxis.new(root3, {
      categoryField: "year",
      renderer: am5xy.AxisRendererX.new(root3, {
        cellStartLocation: 0.1,
        cellEndLocation: 0.9,
        minGridDistance: 30,
      }),
      tooltip: am5.Tooltip.new(root3, {}),
    })
  );

  xAxis.data.setAll(data);

  var yAxis = chart.yAxes.push(
    am5xy.ValueAxis.new(root3, {
      min: 0,
      renderer: am5xy.AxisRendererY.new(root3, {}),
    })
  );

  // Add series
  // https://www.amcharts.com/docs/v5/charts/xy-chart/series/

  // Column series
  var series = chart.series.push(
    am5xy.ColumnSeries.new(root3, {
      xAxis: xAxis,
      yAxis: yAxis,
      valueYField: "value",
      categoryXField: "year",
    })
  );

  series.columns.template.setAll({
    tooltipText: "{categoryX}: {valueY}",
    width: am5.percent(90),
    tooltipY: 0,
  });

  series.data.setAll(data);

  // Variance indicator series
  var series2 = chart.series.push(
    am5xy.ColumnSeries.new(root3, {
      xAxis: xAxis,
      yAxis: yAxis,
      valueYField: "valueNext",
      openValueYField: "value",
      categoryXField: "year",
      fill: am5.color(0x555555),
      stroke: am5.color(0x555555),
    })
  );

  series2.columns.template.setAll({
    width: 1,
  });

  series2.data.setAll(data);

  series2.bullets.push(function () {
    var label = am5.Label.new(root3, {
      text: "{valueY}",
      fontWeight: "500",
      fill: am5.color(0x00cc00),
      centerY: am5.p100,
      centerX: am5.p50,
      populateText: true,
    });

    // Modify text of the bullet with percent
    label.adapters.add("text", function (text, target) {
      var percent = getVariancePercent(target.dataItem);
      return percent ? percent + "%" : text;
    });

    // Set dynamic color of the bullet
    label.adapters.add("centerY", function (center, target) {
      return getVariancePercent(target.dataItem) < 0 ? 0 : center;
    });

    // Set dynamic color of the bullet
    label.adapters.add("fill", function (fill, target) {
      return getVariancePercent(target.dataItem) < 0
        ? am5.color(0xcc0000)
        : fill;
    });

    return am5.Bullet.new(root3, {
      locationY: 1,
      sprite: label,
    });
  });

  series2.bullets.push(function () {
    var arrow = am5.Graphics.new(root3, {
      rotation: -90,
      centerX: am5.p50,
      centerY: am5.p50,
      dy: 3,
      fill: am5.color(0x555555),
      stroke: am5.color(0x555555),
      draw: function (display) {
        display.moveTo(0, -3);
        display.lineTo(8, 0);
        display.lineTo(0, 3);
        display.lineTo(0, -3);
      },
    });

    arrow.adapters.add("rotation", function (rotation, target) {
      return getVariancePercent(target.dataItem) < 0 ? 90 : rotation;
    });

    arrow.adapters.add("dy", function (dy, target) {
      return getVariancePercent(target.dataItem) < 0 ? -3 : dy;
    });

    return am5.Bullet.new(root3, {
      locationY: 1,
      sprite: arrow,
    });
  });

  // Make stuff animate on load
  // https://www.amcharts.com/docs/v5/concepts/animations/
  series.appear();
  chart.appear(1000, 100);

  function getVariancePercent(dataItem) {
    if (dataItem) {
      var value = dataItem.get("valueY");
      var openValue = dataItem.get("openValueY");
      var change = value - openValue;
      return Math.round((change / openValue) * 100);
    }
    return 0;
  }
}); // end am5.ready()




//// Main Chart




am5.ready(function() {

    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root4 = am5.Root.new("chartdiv4");
    
    
    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root4.setThemes([
      am5themes_Animated.new(root4)
    ]);
    
    
    // Create chart
    // https://www.amcharts.com/docs/v5/charts/xy-chart/
    var chart = root4.container.children.push(am5xy.XYChart.new(root4, {
      panX: true,
      panY: true,
      wheelX: "panX",
      wheelY: "zoomX",
      layout: root4.verticalLayout,
      pinchZoomX:true
    }));
    
    chart.get("colors").set("step", 3);
    
    // Data
    var data = [{
      "date": new Date(2020, 0, 1).getTime(),
      "observed": 0
    }, {
      "date": new Date(2020, 1, 1).getTime(),
      "observed": 4000
    }, {
      "date": new Date(2020, 2, 1).getTime(),
      "observed": 55000
    }, {
      "date": new Date(2020, 3, 1).getTime(),
      "observed": 220000
    }, {
      "date": new Date(2020, 4, 1).getTime(),
      "observed": 390000
    }, {
      "date": new Date(2020, 5, 1).getTime(),
      "observed": 550000
    }, {
      "date": new Date(2020, 6, 1).getTime(),
      "observed": 720000,
      "easing": 720000,
      "projection": 720000,
      "stricter": 720000
    }, {
      "date": new Date(2020, 7, 1).getTime(),
      "easing": 900000,
      "projection": 900000,
      "stricter": 900000
    }, {
      "date": new Date(2020, 8, 1).getTime(),
      "easing": 1053000,
      "projection": 1053000,
      "stricter": 1053000
    }, {
      "date": new Date(2020, 9, 1).getTime(),
      "easing": 1252000,
      "projection": 1249000,
      "stricter": 1232000
    }, {
      "date": new Date(2020, 10, 1).getTime(),
      "easing": 1674000,
      "projection": 1604000,
      "stricter": 1415000
    }, {
      "date": new Date(2020, 11, 1).getTime(),
      "easing": 3212000,
      "projection": 2342000,
      "stricter": 1751000
    }];
    
    
    // Add cursor
    // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
    var cursor = chart.set("cursor", am5xy.XYCursor.new(root4, {}));
    cursor.lineY.set("visible", false);
    
    
    // Create axes
    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
    var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root4, {
      maxDeviation: 0.3,
      baseInterval: {
        timeUnit: "month",
        count: 1
      },
      renderer: am5xy.AxisRendererX.new(root4, {}),
      tooltip: am5.Tooltip.new(root4, {})
    }));
    
    var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root4, {
      maxDeviation: 0.3,
      renderer: am5xy.AxisRendererY.new(root4, {})
    }));
    
    
    // Add series
    // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
    function createSeries(field, name, color, dashed) {
      var series = chart.series.push(am5xy.SmoothedXLineSeries.new(root4, {
        name: name,
        xAxis: xAxis,
        yAxis: yAxis,
        valueYField: field,
        valueXField: "date",
        stroke: color,
        tooltip: am5.Tooltip.new(root4, {
          pointerOrientation: "horizontal",
          getFillFromSprite: false,
          labelText: "[bold]{name}[/]\n{valueX}: [bold]{valueY}[/]"
        })
      }));
      
      series.get("tooltip").get("background").setAll({
        fillOpacity: 0.7,
        fill: color,
        pointerBaseWidth: 0
      });
      
      series.strokes.template.setAll({
        strokeWidth: 2
      });
      
      if (dashed) {
        series.strokes.template.set("strokeDasharray", [5, 3]);
      }
      
      series.data.setAll(data);
      series.appear(1000);
      
      return series;
    }
    
    createSeries("observed", "Observed", am5.color(0xB1B106));
    createSeries("easing", "Easing rules", am5.color(0xD68C45), true);
    createSeries("stricter", "Stricter rules", am5.color(0x2C6E49), true);
    createSeries("projection", "Projection", am5.color(0xB1B106), true);
    
    
    // Set date fields
    // https://www.amcharts.com/docs/v5/concepts/data/#Parsing_dates
    root4.dateFormatter.setAll({
      dateFormat: "yyyy-MM-dd",
      dateFields: ["valueX"]
    });
    
    
    // Add legend
    // https://www.amcharts.com/docs/v5/charts/xy-chart/legend-xy-series/
    var legend = chart.children.push(
      am5.Legend.new(root4, {
        centerX: am5.p50,
        x: am5.p50
      })
    );
    
    legend.data.setAll(chart.series.values);
    
    
    // Make stuff animate on load
    // https://www.amcharts.com/docs/v5/concepts/animations/
    chart.appear(1000, 100);
    
    }); // end am5.ready()



