function ajaxPrint(url, params, element_id) {
    request = new ajaxRequest();
    request.open("GET", url, true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.setRequestHeader("Content-lenght", params.length);
    request.setRequestHeader("Connection", "close");
    request.onreadystatechange = function() {
        if (this.readyState == 4) {
            if (this.status == 200) {
                if (this.responseText != null) {
                    document.getElementById(element_id).innerHTML = this.responseText;
                }
                else alert("ERROR AJAX 1");
            }
            else alert("ERROR AJAX 2 ");
        }
    }
    request.send(params);
}

function ajaxPrintNewsFeed(url, params, element_id) {
    request = new ajaxRequest();
    request.open("GET", url, true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.setRequestHeader("Content-lenght", params.length);
    request.setRequestHeader("Connection", "close");
    request.onreadystatechange = function() {
        if (this.readyState == 4) {
            if (this.status == 200) {
                if (this.responseText != null) {
                    document.getElementById(element_id).innerHTML = document.getElementById(element_id).innerHTML + this.responseText;
                }
                else alert("ERROR AJAX 1");
            }
            else alert("ERROR AJAX 2 ");
        }
    }
    request.send(params);
}

function ajaxRequest() {
	try {
		var request = new XMLHttpRequest();
	}
	catch (el) {
		try {
			request = new ActionXObject("Maxml2.XMLHTTP");
		}
		catch (e2) {
			try {
				request = new ActionXObject("Microsoft.XMLHTTP");
			}
			catch (e3) {
				request = false;
			}
		}
	}
	return request;
}