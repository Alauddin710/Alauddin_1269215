function datacollect(){
	let name = document.data.name.value;
	let phone = document.data.phone.value;
    let text = document.data.text.value;
    let sex = document.data.sex.value;

    var ch = document.data.check;
    var re = "";

    for(var i=0; i<ch.length; i++){
        if(ch[i].checked){
            re += ch[i].value;
        }
    }

    var location = document.data.location.value;

    
	let allinfo;

	mywin = window.open("", "", "height=300,width=500,top=300,left=500");
	allinfo = "<h2>All My information</h2>";
	allinfo += "<p>Name: " + name  + "</p>";
	allinfo += "<p>Phone: " + phone  + "</p>";
    allinfo += "<p> Text: " + text  + "</p>";
    allinfo += "<p> Sex: " + sex  + "</p>";
    allinfo += "<p> Courses: " + re  + "</p>";
    allinfo += "<p> Location: " + location  + "</p>";
   

	mywin.document.write(allinfo);

	
}

