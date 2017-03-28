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
                menu = project.createMenuElement("pic11", "falafelle", "Falafelle", "Bruschetta is an antipasto (starter dish) from Italy consisting of grilled bread rubbed with garlic and topped with olive oil and salt. Variations may include toppings of tomato, vegetables, beans, cured meat, or cheese.");
                menu += project.createMenuElement("pic12", "penne", "Penne", "A healthy twist on a vegan taco, with collard green leaves standing in for taco shells, filled with chipotle sweet potatoes, fresh corn and beans.");
                menu += project.createMenuElement("pic13", "campanelle", "Campanelle", "Karniyarik is a Turkish dish consisting of eggplant stuffed with a mix of sautéed chopped onions, garlic, black pepper, tomatoes, parsley and ground meat.");
                menu += project.createMenuElement("pic14", "angel-hair", "Angel Hair", "Bruschetta is an antipasto (starter dish) from Italy consisting of grilled bread rubbed with garlic and topped with olive oil and salt. Variations may include toppings of tomato, vegetables, beans, cured meat, or cheese.");
                menu += project.createMenuElement("pic15", "acini-di-pepe", "Acini di Pepe", "A meatball is ground or minced meat rolled into a small ball, sometimes along with other ingredients, such as bread crumbs, minced onion, eggs, butter, and seasoning. Meatballs are cooked by frying, baking, steaming, or braising in sauce.");
                menu += project.createMenuElement("pic16", "orecchiette", "Orecchiette", "A bit of heat from red chili flakes and plenty of garlic flavor come through with these crunchy, dill-scented green beans. Spicy Beans and Wilted Greens stew: The Parmesan rind adds richness; the dried beans deliver creaminess.");
                break;
            case "#meat-fish-menu":
                menu = project.createMenuElement("pic21", "steak", "Steak", "Bruschetta is an antipasto (starter dish) from Italy consisting of grilled bread rubbed with garlic and topped with olive oil and salt. Variations may include toppings of tomato, vegetables, beans, cured meat, or cheese.");
                menu += project.createMenuElement("pic22", "cheaken-wings", "Cheaken wings", "A healthy twist on a vegan taco, with collard green leaves standing in for taco shells, filled with chipotle sweet potatoes, fresh corn and beans.");
                menu += project.createMenuElement("pic23", "shashlik", "Meat on sticks", "Karniyarik is a Turkish dish consisting of eggplant stuffed with a mix of sautéed chopped onions, garlic, black pepper, tomatoes, parsley and ground meat.");
                menu += project.createMenuElement("pic24", "salmon", "Salmon", "Bruschetta is an antipasto (starter dish) from Italy consisting of grilled bread rubbed with garlic and topped with olive oil and salt. Variations may include toppings of tomato, vegetables, beans, cured meat, or cheese.");
                menu += project.createMenuElement("pic25", "white-fish", "White fish", "A meatball is ground or minced meat rolled into a small ball, sometimes along with other ingredients, such as bread crumbs, minced onion, eggs, butter, and seasoning. Meatballs are cooked by frying, baking, steaming, or braising in sauce.");
                menu += project.createMenuElement("pic26", "blue-fish", "Blue fish", "A bit of heat from red chili flakes and plenty of garlic flavor come through with these crunchy, dill-scented green beans. Spicy Beans and Wilted Greens stew: The Parmesan rind adds richness; the dried beans deliver creaminess.");
                break;
            case "#dessert-menu":
                menu = project.createMenuElement("pic31", "capcakes", "Capcakes", "Bruschetta is an antipasto (starter dish) from Italy consisting of grilled bread rubbed with garlic and topped with olive oil and salt. Variations may include toppings of tomato, vegetables, beans, cured meat, or cheese.");
                menu += project.createMenuElement("pic32", "pink-cake", "Pink cake", "A healthy twist on a vegan taco, with collard green leaves standing in for taco shells, filled with chipotle sweet potatoes, fresh corn and beans.");
                menu += project.createMenuElement("pic33", "bd-cake", "Birthday cake", "Karniyarik is a Turkish dish consisting of eggplant stuffed with a mix of sautéed chopped onions, garlic, black pepper, tomatoes, parsley and ground meat.");
                menu += project.createMenuElement("pic34", "pinkey", "Pinkey", "Bruschetta is an antipasto (starter dish) from Italy consisting of grilled bread rubbed with garlic and topped with olive oil and salt. Variations may include toppings of tomato, vegetables, beans, cured meat, or cheese.");
                menu += project.createMenuElement("pic35", "5-berries", "Five berries", "A meatball is ground or minced meat rolled into a small ball, sometimes along with other ingredients, such as bread crumbs, minced onion, eggs, butter, and seasoning. Meatballs are cooked by frying, baking, steaming, or braising in sauce.");
                menu += project.createMenuElement("pic36", "easter-cake", "Easter cake", "A bit of heat from red chili flakes and plenty of garlic flavor come through with these crunchy, dill-scented green beans. Spicy Beans and Wilted Greens stew: The Parmesan rind adds richness; the dried beans deliver creaminess.");
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
