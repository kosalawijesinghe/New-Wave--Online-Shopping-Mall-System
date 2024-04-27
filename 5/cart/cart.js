var RemovefromCartButtons =  document.getElementById("remove");
console.log(RemovefromCartButtons)
for (var i=0; i<RemovefromCartButtons.length; i++){
    var button = RemovefromCartButtons[i]
    button.addEventListener('click',function(event)
    {
        var buttonClicked = event.target
        buttonClicked.parentElement.parentElement.Remove()
        
    })
    
}



