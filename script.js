(function (project, $, undefined) { 

    project.createMenuElement = function(pic, id, title, text){
        return ' <div class="menu-item"><a href="#"><img src="images/'+pic+'.jpg" alt="" /></a><div>' +
                    '<div><a href="#' + id + '">'+title+'</a></div></div></div>' +
                    '<div id="' + id + '" class="modalDialog"><div><a href="#close" title="Close" class="close">X</a>' +
                    '<h2>'+title+'</h2><img src="images/pic01.jpg" alt="" />' +
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
                menu = project.createMenuElement("pic02", "bruschette-with-tomatos", "Bruschette with Tomatoes", "Bruschetta is an antipasto (starter dish) from Italy consisting of grilled bread rubbed with garlic and topped with olive oil and salt. Variations may include toppings of tomato, vegetables, beans, cured meat, or cheese.");
                menu += project.createMenuElement("pic03", "green-rolls", "Green Rolls", "A healthy twist on a vegan taco, with collard green leaves standing in for taco shells, filled with chipotle sweet potatoes, fresh corn and beans.");
                menu += project.createMenuElement("pic04", "eggplants", "Eggplants", "Karniyarik is a Turkish dish consisting of eggplant stuffed with a mix of sautéed chopped onions, garlic, black pepper, tomatoes, parsley and ground meat.");
                menu += project.createMenuElement("pic05", "bruschette", "Bruschette", "Bruschetta is an antipasto (starter dish) from Italy consisting of grilled bread rubbed with garlic and topped with olive oil and salt. Variations may include toppings of tomato, vegetables, beans, cured meat, or cheese.");
                menu += project.createMenuElement("pic06", "meatballs", "Meatballs", "A meatball is ground or minced meat rolled into a small ball, sometimes along with other ingredients, such as bread crumbs, minced onion, eggs, butter, and seasoning. Meatballs are cooked by frying, baking, steaming, or braising in sauce.");
                menu += project.createMenuElement("pic01", "spicy-beans", "Spicy Beans", "A bit of heat from red chili flakes and plenty of garlic flavor come through with these crunchy, dill-scented green beans. Spicy Beans and Wilted Greens stew: The Parmesan rind adds richness; the dried beans deliver creaminess.");
                break;
            case "#meat-fish-menu":
                menu = project.createMenuElement("pic03", "bruschette-with-tomatos", "Bruschette with Tomatoes", "Bruschetta is an antipasto (starter dish) from Italy consisting of grilled bread rubbed with garlic and topped with olive oil and salt. Variations may include toppings of tomato, vegetables, beans, cured meat, or cheese.");
                menu += project.createMenuElement("pic04", "green-rolls", "Green Rolls", "A healthy twist on a vegan taco, with collard green leaves standing in for taco shells, filled with chipotle sweet potatoes, fresh corn and beans.");
                menu += project.createMenuElement("pic05", "eggplants", "Eggplants", "Karniyarik is a Turkish dish consisting of eggplant stuffed with a mix of sautéed chopped onions, garlic, black pepper, tomatoes, parsley and ground meat.");
                menu += project.createMenuElement("pic06", "bruschette", "Bruschette", "Bruschetta is an antipasto (starter dish) from Italy consisting of grilled bread rubbed with garlic and topped with olive oil and salt. Variations may include toppings of tomato, vegetables, beans, cured meat, or cheese.");
                menu += project.createMenuElement("pic01", "meatballs", "Meatballs", "A meatball is ground or minced meat rolled into a small ball, sometimes along with other ingredients, such as bread crumbs, minced onion, eggs, butter, and seasoning. Meatballs are cooked by frying, baking, steaming, or braising in sauce.");
                menu += project.createMenuElement("pic02", "spicy-beans", "Spicy Beans", "A bit of heat from red chili flakes and plenty of garlic flavor come through with these crunchy, dill-scented green beans. Spicy Beans and Wilted Greens stew: The Parmesan rind adds richness; the dried beans deliver creaminess.");
                break;
            case "#dessert-menu":
                menu = project.createMenuElement("pic04", "bruschette-with-tomatos", "Bruschette with Tomatoes", "Bruschetta is an antipasto (starter dish) from Italy consisting of grilled bread rubbed with garlic and topped with olive oil and salt. Variations may include toppings of tomato, vegetables, beans, cured meat, or cheese.");
                menu += project.createMenuElement("pic05", "green-rolls", "Green Rolls", "A healthy twist on a vegan taco, with collard green leaves standing in for taco shells, filled with chipotle sweet potatoes, fresh corn and beans.");
                menu += project.createMenuElement("pic06", "eggplants", "Eggplants", "Karniyarik is a Turkish dish consisting of eggplant stuffed with a mix of sautéed chopped onions, garlic, black pepper, tomatoes, parsley and ground meat.");
                menu += project.createMenuElement("pic01", "bruschette", "Bruschette", "Bruschetta is an antipasto (starter dish) from Italy consisting of grilled bread rubbed with garlic and topped with olive oil and salt. Variations may include toppings of tomato, vegetables, beans, cured meat, or cheese.");
                menu += project.createMenuElement("pic02", "meatballs", "Meatballs", "A meatball is ground or minced meat rolled into a small ball, sometimes along with other ingredients, such as bread crumbs, minced onion, eggs, butter, and seasoning. Meatballs are cooked by frying, baking, steaming, or braising in sauce.");
                menu += project.createMenuElement("pic03", "spicy-beans", "Spicy Beans", "A bit of heat from red chili flakes and plenty of garlic flavor come through with these crunchy, dill-scented green beans. Spicy Beans and Wilted Greens stew: The Parmesan rind adds richness; the dried beans deliver creaminess.");
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
