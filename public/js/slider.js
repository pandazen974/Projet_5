var slider = {

    degres: 0,
    cubeElt: document.getElementById("cube"),
    continuer: $("#continuer"),
    retour: $("#retour"),



    init: function (_this) {


        var _this = this;
        slider.effet(_this);
        slider.suivant(_this);
        slider.precedent(_this);

    },

    //rotation du cube vers la droite
    avant: function (_this) {
        _this.degres += 90;
        console.log(_this.degres);
        _this.cubeElt.style.transform = "rotateY(" + _this.degres + "deg)";
        if (_this.degres > 0) {
            $("#retour").css("visibility", "visible");
        }
        if (_this.degres === 270) {
            $("#continuer").css("visibility", "hidden");
        }
    },

    //rotation du cube vers la gauche
    arriere: function (_this) {
        _this.degres -= 90;
        console.log(_this.degres);
        _this.cubeElt.style.transform = "rotateY(" + _this.degres + "deg)";
        if (_this.degres === 0) {
            $("#retour").css("visibility", "hidden");
        }
        if (_this.degres < 270) {
            $("#continuer").css("visibility", "visible");

        }
    },

    //vers la droite
    suivant: function (_this) {
        //rotation au clic
        $('#continuer').on('click', function () {
            _this.avant(_this);
        });
        
        //rotation avec le clavier 
        //relachement pression touche
        $(document).keyup(function (touche) {
            var appui = touche.which || touche.keyCode;
            if (_this.degres >= 270) {
                touche.preventDefault();
            } else if (appui === 39) { //
                console.log(appui);

                $('#continuer').css("border", "solid 3px white");
                $('#continuer').css("color", "white");
                _this.avant(_this);

            }

        });
        //pression touche
        $(document).keydown(function (touche) {
            var appui = touche.which || touche.keyCode;

            if (_this.degres >= 270) {
                touche.preventDefault();
            } else if (appui === 39) {
                $('#continuer').css("border", "solid 3px rgb(66, 176, 244)");
                $('#continuer').css("color", "rgb(66, 176, 244)");
            }
        });
    },
    
    //vers la gauche
    precedent: function (_this) {
        //retour au clic
        $('#retour').on('click', function () {
            _this.arriere(_this);
        });
        //relachement pression touche
        $(document).keyup(function (touche) {
            var appui = touche.which || touche.keyCode;
            if (_this.degres == 0) {
                touche.preventDefault();
            } else if (appui === 37) {
                $('#retour').css("border", "solid 3px white");
                $('#retour').css("color", "white");
                _this.arriere(_this);
            }
        });
        //pression touche
        $(document).keydown(function (touche) {
            var appui = touche.which || touche.keyCode;
            if (_this.degres == 0) {
                touche.preventDefault();
            } else if (appui === 37) {
                $('#retour').css("border", "solid 3px rgb(66, 176, 244)");
                $('#retour').css("color", "rgb(66, 176, 244)");
            };

        });


    },

    effet: function (_this) {

        //effets couleurs et bordure au survol de la souris du bouton retour
        _this.retour.mouseover(function () {
            _this.retour.css("color", "rgb(66, 176, 244)");
            _this.retour.css("border", "solid 3px rgb(66, 176, 244)");
        });
        _this.retour.mouseleave(function () {
            _this.retour.css("color", "white");
            _this.retour.css("border", "solid 3px white");
        });

        //effets couleurs et bodure au survol de la souris du bouton continuer
        _this.continuer.mouseover(function () {
            _this.continuer.css("color", "rgb(66, 176, 244)");
            _this.continuer.css("border", "solid 3px rgb(66, 176, 244)");
        });
        _this.continuer.mouseleave(function () {
            _this.continuer.css("color", "white");
            _this.continuer.css("border", "solid 3px white");
        });
    },

};


slider.init();
