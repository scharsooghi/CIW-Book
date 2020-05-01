// JavaScript Document
function checkInfo(){
		var status = true;
		if(document.frm.name.value.length == 0){
			first.innerHTML = "<font face='tahoma' size='1' color='red'>"+"لطفا فیلد مربوط به نام را کامل نمایید.*"+"</font>";
			status = false;
		}
		else{
			first.innerHTML = "";
			}
		
		
		if(document.frm.email.value.length == 0){
			mail.innerHTML = "<font face='tahoma' size='1' color='red'>"+"لطفا فیلد مربوط به ایمیل را کامل نمایید.*"+"</font>";
			status = false;
		}
		else if(document.frm.email.value.length != 0 && document.frm.email.value.indexOf("@") == -1){
			mail.innerHTML = "<font face='tahoma' size='1' color='red'>"+"لطفا در واردکردن ایمیل دقت نمایید.*"+"</font>";
			status = false;
		}
		else{
			mail.innerHTML = "";
			}
			
		if(document.frm.subject.value.length == 0){
			subj.innerHTML = "<font face='tahoma' size='1' color='red'>"+"لطفا فیلد مربوط به عنوان را کامل نمایید.*"+"</font>";
			status = false;
		}
		else{
			first.innerHTML = "";
			}	
		
		if(document.frm.description.value.length == 0){
			descript.innerHTML = "<font face='tahoma' size='1' color='red'>"+"لطفا  توضیحات خود را وارد نمایید.*"+"</font>";
			status = false;
		}
		else{
			first.innerHTML = "";
			}
		
		if(status == false){
			return false;
			}
		else{
			return true;
			}
		
	}