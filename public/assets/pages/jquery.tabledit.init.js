$(function(){$("#makeEditable").SetEditable({$addButton:$("#but_add")}),$("#submit_data").on("click",function(){var t=TableToCSV("makeEditable",",");console.log(t);var a=t.split("\n"),e=[];for(i=0;i<a.length;i++)e[i]=a[i].split(",");for(i=0;i<e.length;i++)e[i]})}),$("#mainTable").editableTableWidget().numericInputExample().find("td:first").focus();