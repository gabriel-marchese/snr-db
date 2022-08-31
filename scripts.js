var btn = document.getElementById('show/hidden');
var history = document.getElementsByClassName('history');

btn.addEventListener('click', function(){

    if(history.style.display === 'flex'){
        history.style.display = 'none';
    }else{
        history.style.display = 'flex';
    }

}); 