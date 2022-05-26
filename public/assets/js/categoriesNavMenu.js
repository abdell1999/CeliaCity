$(document).ready(function() {

let nav = $("#nav-1");



$.ajax({
    url: "/fetch-categories",
    dataType: "json",
}).done(function (response) {
    console.log(response);
    let route;
    response.forEach(element => {
        if(element.name == "Guia"){
            route = "/guide";
        }else{
            route = `/categories/${element.id}`;
        }
        nav.append(`<li class="nav-item">
       <a class="page-scroll" href="${route}">${element.name} </a>
       </li>
        
        `);
        
    });
   

});
let nav2 = $("#nav2");
$.ajax({
    url: "/fetch-categories",
    dataType: "json",
}).done(function (response) {
    console.log(response);
    response.forEach(element => {
        nav2.append(`
        
        <li><a href="/categories/${element.id}">${element.name}</a></li>
        
        `);
    });
   

});

});