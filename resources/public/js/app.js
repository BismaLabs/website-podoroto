// function berita
$(document).ready(function(){
    berita(0);

    $("#load_more_berita").click(function(e){
        e.preventDefault();
        var page = $(this).data('val');
        berita(page);

    });
});

var berita = function(page){
    $("#loader").show();
    $("#load_more_berita").show();
    $.ajax({
        url: BASE_URL+"home/get_berita",
        type:'GET',
        data: {page:page}
    }).done(function(response){
        $("#berita").append(response);
        $("#loader").hide();
        $('#load_more_berita').data('val', ($('#load_more_berita').data('val')+1));
        //scroll();
        if(response == ""){
            $("#load_more_berita").hide();
        }
    });
};


// function produk
$(document).ready(function(){
    produk(0);

    $("#load_more_produk").click(function(e){
        e.preventDefault();
        var page = $(this).data('val');
        produk(page);

    });
});

var produk = function(page){
    $("#loader").show();
    $("#load_more_produk").show();
    $.ajax({
        url: BASE_URL+"home/get_produk",
        type:'GET',
        data: {page:page}
    }).done(function(response){
        $("#produk").append(response);
        $("#loader").hide();
        $('#load_more_produk').data('val', ($('#load_more_produk').data('val')+1));
        //scroll();
        if(response == ""){
            $("#load_more_produk").hide();
        }
    });
};


// function kategori
$(document).ready(function(){
    kategori(0);

    $("#load_more_kategori").click(function(e){
        e.preventDefault();
        var page = $(this).data('val');
        kategori(page);

    });
});

var kategori = function(page){
    $("#loader").show();
    $("#load_more_kategori").show();
    $.ajax({
        url: BASE_URL+"home/get_kategori",
        type:'GET',
        data: {page:page}
    }).done(function(response){
        $("#kategori").append(response);
        $("#loader").hide();
        $('#load_more_kategori').data('val', ($('#load_more_kategori').data('val')+1));
        //scroll();
        if(response == ""){
            $("#load_more_kategori").hide();
        }
    });
};

// function album
$(document).ready(function(){
    album(0);

    $("#load_more_album").click(function(e){
        e.preventDefault();
        var page = $(this).data('val');
        album(page);

    });
});

var album = function(page){
    $("#loader").show();
    $("#load_more_album").show();
    $.ajax({
        url: BASE_URL+"home/get_album",
        type:'GET',
        data: {page:page}
    }).done(function(response){
        $("#album").append(response);
        $("#loader").hide();
        $('#load_more_album').data('val', ($('#load_more_album').data('val')+1));
        //scroll();
        if(response == ""){
            $("#load_more_album").hide();
        }
    });
};

// function video
$(document).ready(function(){
    video(0);

    $("#load_more_video").click(function(e){
        e.preventDefault();
        var page = $(this).data('val');
        video(page);

    });
});

var video = function(page){
    $("#loader").show();
    $("#load_more_video").show();
    $.ajax({
        url: BASE_URL+"home/get_video",
        type:'GET',
        data: {page:page}
    }).done(function(response){
        $("#video").append(response);
        $("#loader").hide();
        $('#load_more_video').data('val', ($('#load_more_video').data('val')+1));
        //scroll();
        if(response == ""){
            $("#load_more_video").hide();
        }
    });
};