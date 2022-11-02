var icon = document.getElementById('icon');

if(localStorage.getItem('theme') == null){
    localStorage.setItem('theme','light'); 
}

let localData = localStorage.getItem('theme');

if(localData == 'light'){
    icon.src = 'image/moon.png';
    document.body.classList.remove('dark-theme');
}else if(localData == 'dark'){
    icon.src = 'image/sun.png';
    document.body.classList.add('dark-theme');
}

icon.onclick = function(){
    document.body.classList.toggle('dark-theme');
    if(document.body.classList.contains('dark-theme')){
        icon.src='image/sun.png';
        localStorage.setItem('theme','dark');
    }else{
        icon.src='image/moon.png';
        localStorage.setItem('theme','light');
    }
}

function check(){
    var konfirmasi = confirm('Are you sure?');
    if(konfirmasi == true){
        
    }else{
        window.location.href = index.html;
    }
}

function onImage() {
    document.getElementById('logo').src = 'image/logo-chocolate.png'
    document.getElementById('logo').alt = 'chocolate'
  }
  
  function outImage() {
    document.getElementById('logo').src = 'image/logo-white.png'
    document.getElementById('logo').alt = 'white'
  }
