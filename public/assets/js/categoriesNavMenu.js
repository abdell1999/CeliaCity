$(document).ready(function() {

let nav = $("#nav");



$.ajax({
    url: "/fetch-categories",
    dataType: "json",
}).done(function (response) {
    console.log(response);
    response.forEach(element => {
        nav.append(`
        
        <li class="nav-item">
        <a class="page-scroll" href="/categories/${element.id}">${element.name} </a>
        </li>
        
        `);
    });
   

});


});