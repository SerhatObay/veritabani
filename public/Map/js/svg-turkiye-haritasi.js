/*! SVG Türkiye Haritası | MIT Lisans | dnomak.com */

function svgturkiyeharitasi() {
  const element = document.querySelector('#svg-turkiye-haritasi');
  const info = document.querySelector('.il-isimleri');
const card = document.querySelector('#card');
  element.addEventListener(
    'mouseover',
    function (event) {
      if (event.target.tagName === 'path') {
        info.innerHTML = [
          '<div>',
          event.target.parentNode.getAttribute('data-iladi'),
          '</div>'
        ].join('');
      }
    }
  );

    element.addEventListener(
        'click',
        function (event) {
            if (event.target.tagName === 'path') {
                card.innerHTML = [
                    '<div>',
                    event.target.parentNode.getAttribute('data-iladi'),
                    '<hr>',


                    '<b>Yüzölçümü: </b>',
                    event.target.parentNode.getAttribute('data-yuzolcumu'),
                    '<br>',




                    '<b>Rakım: </b>',
                    event.target.parentNode.getAttribute('data-rakim'),
                    '<br>',

                    '<b>İlce Sayısı: </b>',
                    event.target.parentNode.getAttribute('data-ilcesayisi'),
                    '<br>',

                    '<b>Plaka Kodu: </b>',
                    event.target.parentNode.getAttribute('data-plakakodu'),
                    '<br>',

                    '<b>Alan Kodu </b>',
                    event.target.parentNode.getAttribute('data-alankodu'),
                    '<br>',


                ].join('');
            }
        }
    );

  element.addEventListener(
    'mousemove',
    function (event) {
      info.style.top = event.pageY + 25 + 'px';
      info.style.left = event.pageX + 'px';
    }
  );

  element.addEventListener(
    'mouseout',
    function (event) {
      info.innerHTML = '';
    }
  );

  element.addEventListener(
    'click',
    function (event) {
      if (event.target.tagName === 'path') {
        const parent = event.target.parentNode;
        const id = parent.getAttribute('id');



        window.location.href = (
          '#'
          + id
          + '-'
          + parent.getAttribute('data-plakakodu')
        );
      }
    }
  );
}
