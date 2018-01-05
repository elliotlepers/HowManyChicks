/*jslint browser: true*/
/*global $, jQuery, alert*/

var form = $('.form');

$.getJSON( "data.json").done(function(v) {
    $(form).submit(function (event) {
        event.preventDefault();

        $(form).find("textarea, input, .submit").prop("disabled", true);
        $(form).find(".submit").button('loading');

        var names = this.names.value.toLowerCase().replace(/[èéêë]/g,"e").replace(/[àä]/g,"a").replace(/[ï]/g,"i").split('\n'),
            bin = [],
            m = 0,
            f = 0,
            u = 0;

        for (i = 0, len = names.length; i < len; i++) {
            var name = names[i].split(/-+/);
            if (v[name[0]] == "m"){
                m++
            }else if(v[name[0]] == "f"){
                f++
            }else{
                u++;
                bin.push(names[i]);
            }
        }

        var mp = Math.round(100 / names.length * m, -1),
            fp = Math.round(100 / names.length * f, -1),
            up = 100 - mp - fp;

        $(".confirm").html(fp + "% are 👩<br/>" + mp + "% are 👨");

        if(up>0){
          $(".confirm").append("<br/>For " + up + "%, we are 😕");
        }

        if(fp>=(fp+mp)/2){
          $(".confirm").append("<br/>💪");
        }else{
          $(".confirm").append("<br/>🤷‍♂️");
        }


        $(".viewport").addClass("success");

        console.log(bin);

    });
});



$(".share").on("click", function(){
    ga('send', 'event', 'Action', 'Share', $(this).parent().attr('data-network'));
});
