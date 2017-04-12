var mE = "#menu article"
var hqcE = "#highQualityCuisine article";
var otbiE = "#onlyTheBestIngredients article";
var oeE = "#events article";
var ueE = ".upcoming-events div";
var peE = ".past-events div";
var batE = "#bookATableSection article";
var ohE = "#openingHoursSection article";
var cfE = "#contacts .contact-form";

var am = "#appetizers-menu"
var fpm = "#fresh-pasta-menu"
var mfm = "#meat-fish-menu"
var dm = "#dessert-menu"

var firstMe = true;
var firstHqc = true;
var firstOtbi = true;
var firstOe = true;
var firstUe = true;
var firstPe = true;
var firstCu = true;
var firstBat = true;
var firstOhe = true;

var currentCategory;

$(document).ready(function () {
	hide(am + "-list"); hide(fpm + "-list"); hide(mfm + "-list"); hide(dm + "-list");
	setChosenMenu(am);
	hideElement(mE);
	hideElement(otbiE);
	hideElement(hqcE);
	hideElement(oeE);
	hideElement(ueE);
	hideElement(peE);
	hideElement(cfE);
	hideElement(batE);
	hideElement(ohE);
    
	$(am).hover(function () {
		setChosenMenu(am);
	})
	$(fpm).hover(function () {
		setChosenMenu(fpm);
	})
	$(mfm).hover(function () {
		setChosenMenu(mfm);
	})
	$(dm).hover(function () {
		setChosenMenu(dm);
	})
});

$(window).scroll (function () {
	var animateMe = runAnimation(mE);
	var animateHqce = runAnimation(hqcE);
	var animateOtbie = runAnimation(otbiE);
	var animateOee = runAnimation(oeE);
	var animateUee = runAnimation(ueE);
	var animatePee = runAnimation(peE);
	var animateBate = runAnimation(batE);
	var animateOhe = runAnimation(ohE);
	var animateContacts = runAnimation(cfE);
	/*var animateApetizers = animateMenuOptions(am);
	var animateFreshPasta = animateMenuOptions(fpm);
	var animateMeatFish = animateMenuOptions(mfm);
	var animateDessert = animateMenuOptions(dm);*/
	
	 // Our menus
	if (animateMe == true) {
		animateElement(mE, firstMe);
	}
	 // High quality cuisine
	if (animateHqce == true) {
		animateElement(hqcE, firstHqc);
	}
	// Only the best ingredients
	if (animateOtbie == true) {
		animateElement(otbiE, firstOtbi);
	}
	// Our events
	if (animateOee == true) {
		animateElement(oeE, firstOe);
	}
	// Upcoming events
	if (animateUee == true) {
		animateElement(ueE, firstUe);
	}
	// Past events
	if (animatePee == true) {
		animateElement(peE, firstPe);
	}
	// Contact form
	if (animateContacts == true) {
		animateElement(cfE, firstCu)
	}
	// Book a table
	if (animateBate == true) {
		animateElement(batE, firstBat)
	}
	// Opening hours
	if (animateOhe == true) {
		animateElement(ohE, firstOhe)
	}
	/*if (animateApetizers == true) {
		setChosenMenu(am);
	}
	if (animateFreshPasta == true) {
		setChosenMenu(fpm);
	}
	if (animateMeatFish == true) {
		setChosenMenu(mfm);
	}
	if (animateDessert == true) {
		setChosenMenu(dm);
	}*/
});

function runAnimation(section, e) {
	var y = $(document).scrollTop();
	var s = $(section);
	if (y > s.position().top - (window.innerHeight - 50)) {
		return true;
	}
}

function animateMenuOptions(section, e) {
	var y = $(document).scrollTop();
	var s = $(section);
	if (y > s.position().top - (window.innerHeight /2)) {
		return true;
	}
}

function setChosenMenu(element) {
	$(".chosen").removeClass("chosen");
	$(element).addClass("chosen");
	
	if (currentCategory !== undefined) {
		hide(currentCategory);
	}
	currentCategory = element + "-list";
	show(currentCategory)
}

function animateElement(e, first) {
	if (first == true){
		$(e).animate({ left: '0px' }, "slow");
		first = false;
	}
}

function hideElement(e) {
	$(e).css({
		position: 'relative',
		left: '-2000px'
	});
}

function hide(e) {
	$(e).css({
		display: 'none'
	});
}

function show(e) {
	$(e).css({
		display: 'block'
	});
}


/*(function (project, $, undefined) { 

    project.createMenuElement = function(pic, id, title, text){
        return ' <div class="menu-item"><a href="#"><img src="wp-content/themes/laplace/images/'+ pic +'.jpg" alt="" /></a><div>' +
                    '<div><a href="#' + id + '">' + title + '</a></div></div></div>' +
                    '<div id="' + id + '" class="modalDialog"><div><a href="#close" title="Close" class="close">X</a>' +
                    '<h2>'+title+'</h2><img src="wp-content/themes/laplace/images/'+ pic +'.jpg" alt="" />' +
                    '<p>'+text+'</p></div></div> ';
    }
    project.getMenu = function (menuId) {
        var menu = "";
		menu += project.createMenuElement("pic01", "bruschette-with-tomatos", "Bruschette with Tomatoes", "Bruschetta is an antipasto (starter dish) from Italy consisting of grilled bread rubbed with garlic and topped with olive oil and salt. Variations may include toppings of tomato, vegetables, beans, cured meat, or cheese.");
		menu += project.createMenuElement("pic02", "green-rolls", "Green Rolls", "A healthy twist on a vegan taco, with collard green leaves standing in for taco shells, filled with chipotle sweet potatoes, fresh corn and beans.");
		menu += project.createMenuElement("pic03", "eggplants", "Eggplants", "Karniyarik is a Turkish dish consisting of eggplant stuffed with a mix of sautéed chopped onions, garlic, black pepper, tomatoes, parsley and ground meat.");
		menu += project.createMenuElement("pic04", "bruschette", "Bruschette", "Bruschetta is an antipasto (starter dish) from Italy consisting of grilled bread rubbed with garlic and topped with olive oil and salt. Variations may include toppings of tomato, vegetables, beans, cured meat, or cheese.");
		menu += project.createMenuElement("pic05", "meatballs", "Meatballs", "A meatball is ground or minced meat rolled into a small ball, sometimes along with other ingredients, such as bread crumbs, minced onion, eggs, butter, and seasoning. Meatballs are cooked by frying, baking, steaming, or braising in sauce.");
		menu += project.createMenuElement("pic06", "spicy-beans", "Spicy Beans", "A bit of heat from red chili flakes and plenty of garlic flavor come through with these crunchy, dill-scented green beans. Spicy Beans and Wilted Greens stew: The Parmesan rind adds richness; the dried beans deliver creaminess.");
		menu += project.createMenuElement("pic11", "falafelle", "Falafelle", "A Middle Eastern dish of spiced mashed chickpeas or other pulses formed into balls or fritters and deep-fried, usually eaten with or in pitta bread.");
		menu += project.createMenuElement("pic12", "penne", "Penne", "Pasta in the form of short wide tubes.");
		menu += project.createMenuElement("pic13", "campanelle", "Campanelle", "Campanelle is a type of pasta which is shaped like a cone with a ruffled edge, or a bell-like flower. It is also sometimes referred to as gigli or riccioli.");
		menu += project.createMenuElement("pic14", "angel-hair", "Angel Hair", "A type of pasta consisting of very fine long strands.");
		menu += project.createMenuElement("pic15", "acini-di-pepe", "Acini di Pepe", "Acini di pepe are a form of pasta. They are also sometimes referred to as pastina; however, some pasta makers distinguish pastina as smaller than acini di pepe. Acini di pepe are often used in Italian wedding soup.");
		menu += project.createMenuElement("pic16", "orecchiette", "Orecchiette", "Small pieces of ear-shaped pasta.");
		menu += project.createMenuElement("pic21", "steak", "Steak", "High-quality beef taken from the hindquarters of the animal, typically cut into thick slices that are cooked by grilling or frying.");
		menu += project.createMenuElement("pic22", "cheaken-wings", "Chicken wings", "A chicken wing in the cuisine of the United States is a chicken wing section (flapper or drumette) that is generally deep-fried, unbreaded, and coated in vinegar-based cayenne pepper hot sauce and butter.");
		menu += project.createMenuElement("pic23", "shashlik", "Meat skewer", "A long piece of wood or metal used for holding pieces of food, typically meat, together during cooking. 'thread the meat on to large skewers and grill over a gentle heat.");
		menu += project.createMenuElement("pic24", "salmon", "Salmon fillet", "A cured and then hot or cold smoked fillet.");
		menu += project.createMenuElement("pic25", "white-fish", "Trout fillet", "A cooked trout filet.");
		menu += project.createMenuElement("pic26", "blue-fish", "Perch", "A roasted perch.");
		menu += project.createMenuElement("pic31", "capcakes", "Cupcakes", "A small cake.");
		menu += project.createMenuElement("pic32", "pink-cake", "Pink berry cake", "A small cake with berries.");
		menu += project.createMenuElement("pic33", "bd-cake", "Birthday cake", "A cake for your birthday.");
		menu += project.createMenuElement("pic34", "pinkey", "Pinkie", "Pinkie Cake is a pink pony that Zane loves and he has said \"Pinkie Cake\" was his \"favorite\" pony many times in Side stories.");
		menu += project.createMenuElement("pic35", "5-berries", "Five berries", "A berry cake with five different sorts of berries.");
		menu += project.createMenuElement("pic36", "easter-cake", "Easter cake", "A cake with easter eggs.");
		menu += project.createMenuElement("pic01", "bruschette-with-tomatos", "Bruschette with Tomatoes", "Bruschetta is an antipasto (starter dish) from Italy consisting of grilled bread rubbed with garlic and topped with olive oil and salt. Variations may include toppings of tomato, vegetables, beans, cured meat, or cheese.");
		menu += project.createMenuElement("pic02", "green-rolls", "Green Rolls", "A healthy twist on a vegan taco, with collard green leaves standing in for taco shells, filled with chipotle sweet potatoes, fresh corn and beans.");
		menu += project.createMenuElement("pic03", "eggplants", "Eggplants", "Karniyarik is a Turkish dish consisting of eggplant stuffed with a mix of sautéed chopped onions, garlic, black pepper, tomatoes, parsley and ground meat.");
		menu += project.createMenuElement("pic04", "bruschette", "Bruschette", "Bruschetta is an antipasto (starter dish) from Italy consisting of grilled bread rubbed with garlic and topped with olive oil and salt. Variations may include toppings of tomato, vegetables, beans, cured meat, or cheese.");
		menu += project.createMenuElement("pic05", "meatballs", "Meatballs", "A meatball is ground or minced meat rolled into a small ball, sometimes along with other ingredients, such as bread crumbs, minced onion, eggs, butter, and seasoning. Meatballs are cooked by frying, baking, steaming, or braising in sauce.");
		menu += project.createMenuElement("pic06", "spicy-beans", "Spicy Beans", "A bit of heat from red chili flakes and plenty of garlic flavor come through with these crunchy, dill-scented green beans. Spicy Beans and Wilted Greens stew: The Parmesan rind adds richness; the dried beans deliver creaminess.");
        return menu;
    }
    

    }(window.project = window.project || {}, jQuery));*/
