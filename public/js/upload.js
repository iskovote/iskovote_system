function presImageC1()
{
if(this.files && this.files[0])
{
var obj = new FileReader();
obj.onload = function(data){
var image = document.getElementById("presC1");
image.src = data.target.result;
image.style.display = "block";
}
obj.readAsDataURL(this.files[0]);
}
}

function presImageC2()
{
if(this.files && this.files[0])
{
var obj = new FileReader();
obj.onload = function(data){
var image = document.getElementById("presC2");
image.src = data.target.result;
image.style.display = "block";
}
obj.readAsDataURL(this.files[0]);
}
}

function vicepresInImageC1()
{
if(this.files && this.files[0])
{
var obj = new FileReader();
obj.onload = function(data){
var image = document.getElementById("vicepresInC1");
image.src = data.target.result;
image.style.display = "block";
}
obj.readAsDataURL(this.files[0]);
}
}

function vicepresInImageC2()
{
if(this.files && this.files[0])
{
var obj = new FileReader();
obj.onload = function(data){
var image = document.getElementById("vicepresInC2");
image.src = data.target.result;
image.style.display = "block";
}
obj.readAsDataURL(this.files[0]);
}
}

function vicepresExImageC1()
{
if(this.files && this.files[0])
{
var obj = new FileReader();
obj.onload = function(data){
var image = document.getElementById("vicepresExC1");
image.src = data.target.result;
image.style.display = "block";
}
obj.readAsDataURL(this.files[0]);
}
}

function vicepresExImageC2()
{
if(this.files && this.files[0])
{
var obj = new FileReader();
obj.onload = function(data){
var image = document.getElementById("vicepresExC2");
image.src = data.target.result;
image.style.display = "block";
}
obj.readAsDataURL(this.files[0]);
}
}

function secImageC1()
{
if(this.files && this.files[0])
{
var obj = new FileReader();
obj.onload = function(data){
var image = document.getElementById("secretC1");
image.src = data.target.result;
image.style.display = "block";
}
obj.readAsDataURL(this.files[0]);
}
}

function secImageC2()
{
if(this.files && this.files[0])
{
var obj = new FileReader();
obj.onload = function(data){
var image = document.getElementById("secretC2");
image.src = data.target.result;
image.style.display = "block";
}
obj.readAsDataURL(this.files[0]);
}
}

function assistsecImageC1()
{
if(this.files && this.files[0])
{
var obj = new FileReader();
obj.onload = function(data){
var image = document.getElementById("assistsecretC1");
image.src = data.target.result;
image.style.display = "block";
}
obj.readAsDataURL(this.files[0]);
}
}

function assistsecImageC2()
{
if(this.files && this.files[0])
{
var obj = new FileReader();
obj.onload = function(data){
var image = document.getElementById("assistsecretC2");
image.src = data.target.result;
image.style.display = "block";
}
obj.readAsDataURL(this.files[0]);
}
}

function treasurerImageC1()
{
if(this.files && this.files[0])
{
var obj = new FileReader();
obj.onload = function(data){
var image = document.getElementById("treasuC1");
image.src = data.target.result;
image.style.display = "block";
}
obj.readAsDataURL(this.files[0]);
}
}

function treasurerImageC2()
{
if(this.files && this.files[0])
{
var obj = new FileReader();
obj.onload = function(data){
var image = document.getElementById("treasuC2");
image.src = data.target.result;
image.style.display = "block";
}
obj.readAsDataURL(this.files[0]);
}
}
