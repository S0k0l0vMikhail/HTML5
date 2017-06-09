window.onload = function (){
  document.getElementById('green').onClick = function (){
    console.log('work');
    document.getElementsByTagName('body')[0].style.background = 'green';
  }
}
