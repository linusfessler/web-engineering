(function (project, $, undefined) { 

    project.createMenuElement = function(pic, id, title, text){
        return ' <div class="menu-item"><a href="#"><img src="images/'+pic+'.jpg" alt="" /></a><div>' +
                    '<div><a href="#' + id + '">'+title+'</a></div></div></div>' +
                    '<div id="' + id + '" class="modalDialog"><div><a href="#close" title="Close" class="close">X</a>' +
                    '<h2>'+title+'</h2><img src="images/'+pic+'.jpg" alt="" />' +
                    '<p>'+text+'</p></div></div> ';
    }
    project.getMenu = function (menuName) {
        var menu = "";
        switch(menuName) {
            case "#appetizers-menu":
                menu = project.createMenuElement("pic01", "bruschette-with-tomatos", "Bruschette with Tomatoes", "Bruschetta is an antipasto (starter dish) from Italy consisting of grilled bread rubbed with garlic and topped with olive oil and salt. Variations may include toppings of tomato, vegetables, beans, cured meat, or cheese.");
                menu += project.createMenuElement("pic02", "green-rolls", "Green Rolls", "A healthy twist on a vegan taco, with collard green leaves standing in for taco shells, filled with chipotle sweet potatoes, fresh corn and beans.");
                menu += project.createMenuElement("pic03", "eggplants", "Eggplants", "Karniyarik is a Turkish dish consisting of eggplant stuffed with a mix of sautéed chopped onions, garlic, black pepper, tomatoes, parsley and ground meat.");
                menu += project.createMenuElement("pic04", "bruschette", "Bruschette", "Bruschetta is an antipasto (starter dish) from Italy consisting of grilled bread rubbed with garlic and topped with olive oil and salt. Variations may include toppings of tomato, vegetables, beans, cured meat, or cheese.");
                menu += project.createMenuElement("pic05", "meatballs", "Meatballs", "A meatball is ground or minced meat rolled into a small ball, sometimes along with other ingredients, such as bread crumbs, minced onion, eggs, butter, and seasoning. Meatballs are cooked by frying, baking, steaming, or braising in sauce.");
                menu += project.createMenuElement("pic06", "spicy-beans", "Spicy Beans", "A bit of heat from red chili flakes and plenty of garlic flavor come through with these crunchy, dill-scented green beans. Spicy Beans and Wilted Greens stew: The Parmesan rind adds richness; the dried beans deliver creaminess.");        
                break;
            case "#fresh-pasta-menu":
                menu = project.createMenuElement("pic11", "falafelle", "Falafelle", "A Middle Eastern dish of spiced mashed chickpeas or other pulses formed into balls or fritters and deep-fried, usually eaten with or in pitta bread.");
                menu += project.createMenuElement("pic12", "penne", "Penne", "Pasta in the form of short wide tubes.");
                menu += project.createMenuElement("pic13", "campanelle", "Campanelle", "Campanelle is a type of pasta which is shaped like a cone with a ruffled edge, or a bell-like flower. It is also sometimes referred to as gigli or riccioli.");
                menu += project.createMenuElement("pic14", "angel-hair", "Angel Hair", "A type of pasta consisting of very fine long strands.");
                menu += project.createMenuElement("pic15", "acini-di-pepe", "Acini di Pepe", "Acini di pepe are a form of pasta. They are also sometimes referred to as pastina; however, some pasta makers distinguish pastina as smaller than acini di pepe. Acini di pepe are often used in Italian wedding soup.");
                menu += project.createMenuElement("pic16", "orecchiette", "Orecchiette", "Small pieces of ear-shaped pasta.");
                break;
            case "#meat-fish-menu":
                menu = project.createMenuElement("pic21", "steak", "Steak", "High-quality beef taken from the hindquarters of the animal, typically cut into thick slices that are cooked by grilling or frying.");
                menu += project.createMenuElement("pic22", "cheaken-wings", "Chicken wings", "A chicken wing in the cuisine of the United States is a chicken wing section (flapper or drumette) that is generally deep-fried, unbreaded, and coated in vinegar-based cayenne pepper hot sauce and butter.");
                menu += project.createMenuElement("pic23", "shashlik", "Meat skewer", "A long piece of wood or metal used for holding pieces of food, typically meat, together during cooking. 'thread the meat on to large skewers and grill over a gentle heat.");
                menu += project.createMenuElement("pic24", "salmon", "Salmon fillet", "A cured and then hot or cold smoked fillet.");
                menu += project.createMenuElement("pic25", "white-fish", "Trout fillet", "A cooked trout filet.");
                menu += project.createMenuElement("pic26", "blue-fish", "Perch", "A roasted perch.");
                break;
            case "#dessert-menu":
                menu = project.createMenuElement("pic31", "capcakes", "Cupcakes", "A small cake.");
                menu += project.createMenuElement("pic32", "pink-cake", "Pink berry cake", "A small cake with berries.");
                menu += project.createMenuElement("pic33", "bd-cake", "Birthday cake", "A cake for your birthday.");
                menu += project.createMenuElement("pic34", "pinkey", "Pinkie", "Pinkie Cake is a pink pony that Zane loves and he has said \"Pinkie Cake\" was his \"favorite\" pony many times in Side stories.");
                menu += project.createMenuElement("pic35", "5-berries", "Five berries", "A berry cake with five different sorts of berries.");
                menu += project.createMenuElement("pic36", "easter-cake", "Easter cake", "A cake with easter eggs.");
                break;
            default:
                menu = project.createMenuElement("pic01", "bruschette-with-tomatos", "Bruschette with Tomatoes", "Bruschetta is an antipasto (starter dish) from Italy consisting of grilled bread rubbed with garlic and topped with olive oil and salt. Variations may include toppings of tomato, vegetables, beans, cured meat, or cheese.");
                menu += project.createMenuElement("pic02", "green-rolls", "Green Rolls", "A healthy twist on a vegan taco, with collard green leaves standing in for taco shells, filled with chipotle sweet potatoes, fresh corn and beans.");
                menu += project.createMenuElement("pic03", "eggplants", "Eggplants", "Karniyarik is a Turkish dish consisting of eggplant stuffed with a mix of sautéed chopped onions, garlic, black pepper, tomatoes, parsley and ground meat.");
                menu += project.createMenuElement("pic04", "bruschette", "Bruschette", "Bruschetta is an antipasto (starter dish) from Italy consisting of grilled bread rubbed with garlic and topped with olive oil and salt. Variations may include toppings of tomato, vegetables, beans, cured meat, or cheese.");
                menu += project.createMenuElement("pic05", "meatballs", "Meatballs", "A meatball is ground or minced meat rolled into a small ball, sometimes along with other ingredients, such as bread crumbs, minced onion, eggs, butter, and seasoning. Meatballs are cooked by frying, baking, steaming, or braising in sauce.");
                menu += project.createMenuElement("pic06", "spicy-beans", "Spicy Beans", "A bit of heat from red chili flakes and plenty of garlic flavor come through with these crunchy, dill-scented green beans. Spicy Beans and Wilted Greens stew: The Parmesan rind adds richness; the dried beans deliver creaminess.");
        }
        return menu;
    }
    

    }(window.project = window.project || {}, jQuery));
