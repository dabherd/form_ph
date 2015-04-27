(function() {
	var dashboardLink = document.getElementById("dashboard");
	var clientsLink = document.getElementById("clients");
	var monitoringLink = document.getElementById("monitor");
	var plansLink = document.getElementById("plans");

	//
	dashboardLink.onclick = function() {
		var xhr = new XMLHttpRequest();

		xhr.onreadystatechange = function() {
			if ((xhr.readyState == 4) && (xhr.status == 200) || (xhr.status == 304)) {
				var dnav = document.getElementById("header-nav-bottom");
				dnav.innerHTML = xhr.responseText;
			};
		}
		xhr.open("GET", "views/dashboards.php", true);
		xhr.send(null);

		return false;
	}

	//
	clientsLink.onclick = function() {
		var xhr = new XMLHttpRequest();

		xhr.onreadystatechange = function() {
			if ((xhr.readyState == 4) && (xhr.status == 200) || (xhr.status == 304)) {
				var dnav = document.getElementById("header-nav-bottom");
				dnav.innerHTML = xhr.responseText;
			}
		};
		xhr.open("GET", "views/clients.php", true);
		xhr.send(null);

		return false;
	}
	//
	monitoringLink.onclick = function() {
		var xhr = new XMLHttpRequest();

		xhr.onreadystatechange = function() {
			if((xhr.readyState == 4) && (xhr.status == 200) || (xhr.status == 304)) {
				var dnav = document.getElementById("header-nav-bottom");
				dnav.innerHTML = xhr.responseText;
			}
		};
		xhr.open("GET", "views/monitoring.php",  true);
		xhr.send(null);

		return false;
	}
	//
	plansLink.onclick = function() {
		var xhr = new XMLHttpRequest();

		xhr.onreadystatechange = function() {
			if((xhr.readyState == 4) && (xhr.status == 200) || (xhr.status == 304)) {
				var dnav = document.getElementById("header-nav-bottom");
				dnav.innerHTML = xhr.responseText;
			}
		};
		xhr.open("GET", "views/plans.php", true);
		xhr.send(null);

		return false;
	}
})();