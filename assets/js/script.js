$(document).ready(function() {
  $('form#formulario-faleconosco').validate({
    rules:{
      nome:{required: true, minlength: 2, number: false},
      email:{required: true, email: true},
      telefone: {required: true, minlength: 14, maxlength:15}
    },
    messages:{
      nome: {required: 'Preencha o campo nome', minlength: 'No mínimo 2 letras', number: 'Apenas letras'},
      email: {required: 'Informe o seu e-mail', email: 'Informe um e-mail válido'},
      telefone: {required: 'Informe seu celular ou telefone', minlength: 'Digite um número existente', maxlength: 'Digite um número existente'}
    },
    submitHandler: function(form) { 
      $('#enviar-contato').attr('disabled','disabled');
      var dados = $('#formulario-faleconosco').serialize();
      $.ajax ({
        type: "POST",
        url: "/limongisim/wp-content/themes/limongisim/php/form-faleconosco.php",
        data: dados,
        success: function(data) {
          if (data == 1) {
            $('#alerta-erro').attr('style', 'display: none !important;');
            $('#alerta-sucesso').attr('style', 'display: flex !important;');
            $('#enviar-contato').prop('disabled', false);
            $("#formulario-faleconosco input").val("");
            $("#formulario-faleconosco input[type = submit]").val("Enviar");
          }
          else
          {
            $('#alerta-erro').attr('style', 'visibility: visible;');
            $('#enviar-contato').prop('disabled', false);
            $("#formulario-faleconosco input").val("");
            $("#formulario-faleconosco input[type = submit]").val("Enviar");
          }
        } 
      });
    }
  });


  /* função de clique */
  $('.clique-tel').click(function() {
      $(this).html($(this).data('number'));
  });

  $('#slick-duvidas').slick({
    rows: 2,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 10000,
    dots: true, 
    appendDots: '#dots',
    prevArrow: '<button class="seta-cima" aria-label="Previous" type="button"><img src="https://concepts.summercomunicacao.com.br/limongisim/wp-content/themes/limongisim/assets/images/seta-cima.png"></button>',
    nextArrow: '<button class="seta-baixo" aria-label="Next" type="button"><img  src="https://concepts.summercomunicacao.com.br/limongisim/wp-content/themes/limongisim/assets/images/seta-baixo.png"></button>',
    appendArrows: $("#setas"),
    customPaging : function(slider, i) {
    var thumb = $(slider.$slides[i]).data();
    var soma = i + 1;
    if (soma >= 10)
    {
      return '<a class="dot btn btn-primary">'+soma+'</a>';
    }
    else 
    {
      return '<a class="dot btn btn-primary">'+0+soma+'</a>';
    }

    },
    responsive: [
      {
        breakpoint: 1024,
        settings: 
        {
          slidesToShow: 1,
          centerMode: false,
          center: true
        }
      }
    ]
  });

  $("#slick-midia").slick({
      slidesToShow: 3,
      autoplay: true,
      centerMode: true, 
      speed: 1500,   
      dots: false,
      prevArrow: '<button class="seta-esquerda" aria-label="Previous" type="button"><img src="https://concepts.summercomunicacao.com.br/limongisim/wp-content/themes/limongisim/assets/images/seta-esquerda.png"></button>',
      nextArrow: '<button class="seta-direita" aria-label="Next" type="button"><img src="https://concepts.summercomunicacao.com.br/limongisim/wp-content/themes/limongisim/assets/images/seta-direita.png"></button>',
      appendArrows: $("#setas2"),
      responsive: [
      {
          breakpoint: 1024,
          settings: 
          {
            slidesToShow: 1,
            centerMode: false,
            center: true
          }
      }
      ]
  });

  $('#indicacoes-cards').slick({
    autoplay: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplaySpeed: 10000,
    speed: 1500,
    prevArrow: '<button class="seta-esquerda-indic" aria-label="Previous" type="button"><img src="https://concepts.summercomunicacao.com.br/limongisim/wp-content/themes/limongisim/assets/images/seta-esquerda-indic.png"></button>',
    nextArrow: '<button class="seta-direita-indic" aria-label="Next" type="button"><img src="https://concepts.summercomunicacao.com.br/limongisim/wp-content/themes/limongisim/assets/images/seta-direita-indic.png"></button>',
    appendArrows: $("#setas3"),
    responsive: [
    {
      breakpoint: 769,
      settings: 
      {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false,
        center: true,
        prevArrow: '<button class="seta-esquerda-indic" aria-label="Previous" type="button"><img src="https://concepts.summercomunicacao.com.br/limongisim/wp-content/themes/limongisim/assets/images/seta-esquerda-indic.png"></button>',
        nextArrow: '<button class="seta-direita-indic" aria-label="Next" type="button"><img src="https://concepts.summercomunicacao.com.br/limongisim/wp-content/themes/limongisim/assets/images/seta-direita-indic.png"></button>',
        appendArrows: $("#setas3")
      }
    },

    {
      breakpoint: 1025,
      settings: 
      {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }]
  });
 
  $('#mobile-logos').owlCarousel({
    centerMode: true,
    singleItem: true,
    loop:true,
    nav:false,
    autoplay: true,
    autoplayTimeout: 3000,
    smartSpeed: 1000,
    dots: false,
    autoplayHoverPause: false,
    slideTransition: 'ease-in',
    responsive: { 
      0:{
        items: 1, 
        slideBy: 1
      },
      401:{
        items: 2, 
        slideBy: 2
      }}
  });

  $('input[name="telefone"]').mask('(00) 0000-00009');
    $('input[name="telefone"]').blur(function(event) {
        if ($(this).val().length == 15) { // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
            $('input[name="telefone"]').mask('(00) 00000-0009');
        } else {
            $('input[name="telefone"]').mask('(00) 0000-00009');
        }
    });
});
