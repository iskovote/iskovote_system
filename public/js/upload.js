function presImage()
{
if(this.files && this.files[0])
{
var obj = new FileReader();
obj.onload = function(data){
var image = document.getElementById("pres");
image.src = data.target.result;
image.style.display = "block";
}
obj.readAsDataURL(this.files[0]);
}
}

