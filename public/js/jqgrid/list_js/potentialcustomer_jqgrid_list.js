$(document).ready(function () {

    //联系人显示列表js
    $.jgrid.defaults.styleUI = 'Bootstrap';
    // Examle data for jqGrid
    var mydata = [
        {
            id: "1",
            invdate: "2010-05-24",
            name: "potentialcustomer",
            note: "note",
            tax: "10.00",
            total: "2111.00"
        },
        {
            id: "2",
            invdate: "2010-05-25",
            name: "test2",
            note: "note2",
            tax: "20.00",
            total: "320.00"
        },
        {
            id: "3",
            invdate: "2007-09-01",
            name: "test3",
            note: "note3",
            tax: "30.00",
            total: "430.00"
        },
        {
            id: "4",
            invdate: "2007-10-04",
            name: "test",
            note: "note",
            tax: "10.00",
            total: "210.00"
        },
        {
            id: "5",
            invdate: "2007-10-05",
            name: "test2",
            note: "note2",
            tax: "20.00",
            total: "320.00"
        },
        {
            id: "6",
            invdate: "2007-09-06",
            name: "test3",
            note: "note3",
            tax: "30.00",
            total: "430.00"
        },
        {
            id: "7",
            invdate: "2007-10-04",
            name: "test",
            note: "note",
            tax: "10.00",
            total: "210.00"
        },
        {
            id: "8",
            invdate: "2007-10-03",
            name: "test2",
            note: "note2",
            amount: "300.00",
            tax: "21.00",
            total: "320.00"
        },
        {
            id: "9",
            invdate: "2007-09-01",
            name: "test3",
            note: "note3",
            amount: "400.00",
            tax: "30.00",
            total: "430.00"
        },
        {
            id: "11",
            invdate: "2007-10-01",
            name: "test",
            note: "note",
            amount: "200.00",
            tax: "10.00",
            total: "210.00"
        },
        {
            id: "12",
            invdate: "2007-10-02",
            name: "test2",
            note: "note2",
            amount: "300.00",
            tax: "20.00",
            total: "320.00"
        },
        {
            id: "13",
            invdate: "2007-09-01",
            name: "test3",
            note: "note3",
            amount: "400.00",
            tax: "30.00",
            total: "430.00"
        },
        {
            id: "14",
            invdate: "2007-10-04",
            name: "test",
            note: "note",
            amount: "200.00",
            tax: "10.00",
            total: "210.00"
        },
        {
            id: "15",
            invdate: "2007-10-05",
            name: "test2",
            note: "note2",
            amount: "300.00",
            tax: "20.00",
            total: "320.00"
        },
        {
            id: "16",
            invdate: "2007-09-06",
            name: "test3",
            note: "note3",
            amount: "400.00",
            tax: "30.00",
            total: "430.00"
        },
        {
            id: "17",
            invdate: "2007-10-04",
            name: "test",
            note: "note",
            amount: "200.00",
            tax: "10.00",
            total: "210.00"
        },
        {
            id: "18",
            invdate: "2007-10-03",
            name: "test2",
            note: "note2",
            amount: "300.00",
            tax: "20.00",
            total: "320.00"
        },
        {
            id: "19",
            invdate: "2007-09-01",
            name: "test3",
            note: "note3",
            amount: "400.00",
            tax: "30.00",
            total: "430.00"
        },
        {
            id: "21",
            invdate: "2007-10-01",
            name: "test",
            note: "note",
            amount: "200.00",
            tax: "10.00",
            total: "210.00"
        },
        {
            id: "22",
            invdate: "2007-10-02",
            name: "test2",
            note: "note2",
            amount: "300.00",
            tax: "20.00",
            total: "320.00"
        },
        {
            id: "23",
            invdate: "2007-09-01",
            name: "test3",
            note: "note3",
            amount: "400.00",
            tax: "30.00",
            total: "430.00"
        },
        {
            id: "24",
            invdate: "2007-10-04",
            name: "test",
            note: "note",
            amount: "200.00",
            tax: "10.00",
            total: "210.00"
        },
        {
            id: "25",
            invdate: "2007-10-05",
            name: "test2",
            note: "note2",
            amount: "300.00",
            tax: "20.00",
            total: "320.00"
        },
        {
            id: "26",
            invdate: "2007-09-06",
            name: "test3",
            note: "note3",
            amount: "400.00",
            tax: "30.00",
            total: "430.00"
        },
        {
            id: "27",
            invdate: "2007-10-04",
            name: "test",
            note: "note",
            amount: "200.00",
            tax: "10.00",
            total: "210.00"
        },
        {
            id: "28",
            invdate: "2007-10-03",
            name: "test2",
            note: "note2",
            amount: "300.00",
            tax: "20.00",
            total: "320.00"
        },
        {
            id: "29",
            invdate: "2007-09-01",
            name: "test3",
            note: "note3",
            amount: "400.00",
            tax: "30.00",
            total: "430.00"
        }
    ];

    // Configuration for jqGrid Example 2
    $("#table_list_potentialcustomer").jqGrid({
        url: "",
        data: mydata,
        datatype: "local",
        height: 468,
        autowidth: true,
        shrinkToFit: true,
        rowNum: 13,
        rowList: [10, 20, 30],
        colNames: ['编号', '公司', '潜在客户名称', '行业', '负责人'],
        colModel: [
            {
                name: 'id',
                index: 'id',
                editable: true,
                width: 20,
                sorttype: "int",
                search: true
            },
            {
                name: 'invdate',
                index: 'invdate',
                editable: true,
                width: 50,
                sorttype: "date",
                formatter: "date"
            },
            {
                name: 'name',
                index: 'name',
                editable: true,
                width: 50
            },
            {
                name: 'amount',
                index: 'amount',
                editable: true,
                width: 50,
                align: "right",
                sorttype: "float",
                formatter: "number"
            },
            {
                name: 'tax',
                index: 'tax',
                editable: true,
                width: 50,
                align: "right",
                sorttype: "float"
            }
        ],
        pager: "#pager_list_potentialcustomer",
        viewrecords: true,
        add: true,
        edit: true,
        addtext: 'Add',
        edittext: 'Edit',
        hidegrid: false
    });


    // Add responsive to jqGrid
    $(window).bind('resize', function () {
        var width = $('.jqGrid_wrapper').width();
        $('#table_list_potentialcustomer').setGridWidth(width);
        $('#table_list_potentialcustomer').setGridWidth(width);
    });
});