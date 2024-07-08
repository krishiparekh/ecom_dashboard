let contry = document.getElementById('contry');
        let moving = document.getElementById('moving');
        let text = document.getElementById('text');
        let list = document.getElementById('list');

        contry.addEventListener('click', () => {
            list.classList.toggle('hidden');
            moving.classList.toggle('roted');
        });
        function Myfunction(omkar) {
            text.innerHTML = omkar;
        }



        let eng_tag = document.getElementById('eng_tag');
        let hin_eng = document.querySelector('.hin_eng');
        let language = document.querySelector('.language');


        language.addEventListener('click', () => {
            hin_eng.classList.toggle('display_div');
        });
        function languageolx(anyone) {
            eng_tag.innerHTML = anyone;
        }



        let girl_img_id = document.getElementById('girl_img_id');
        let dropdownid = document.getElementById('dropdownid');

        girl_img_id.addEventListener('click', () => {
            dropdownid.classList.toggle('blobkdis');
        });



        // ==================== *  chat box * ============================= 

        let sand_icon = document.getElementById('sand_icon');
        let message = document.getElementById('message');
        let text_message = document.getElementById('text_message');
        let demo = document.getElementById('demo');


        sand_icon.addEventListener('click', () => {
            message.innerHTML = text_message.value;
            message.style = 'display: block';
            text_message.value = demo.value
        })

function back() {
    location.href = "products.html";
  }