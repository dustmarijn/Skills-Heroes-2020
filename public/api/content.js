// Api Link+Key
$.getJSON("api/content-games.json",

// Function to extract data from the Api
    function(data){
        console.log(data);

        var data[30seconds].title;
        // var al1 = data[data.length-1].al1;
        // var al2 = data[data.length-1].al2;
        // var video = data[data.length-1].video;
        // var werkje = data[data.length-1].werkje;
        // var page = data[data.length-1].page;




        // Make the variable an working variable for in html
        $("#title").text(`${title}`);
        // $("#al1").text(`${al1}`);
        // $("#al2").text(`${al2}`);
        // $(".video").attr("src",`${video}`);
        // $(".werkje").attr("src",`${werkje}`);
        // $(".page").attr("scr",`${page}`);








    });

