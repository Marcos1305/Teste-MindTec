(function(document, window){
    'use strict'
    var $select = document.querySelector('[data-js="selectTipo"]');
    var $selectValueFromServer = document.querySelector('[data-js="contato-cliente"]');
    var ajax;
    ajax = new XMLHttpRequest();

    ajax.open('GET', 'http://localhost:8080/api/tipos-contatos');
    ajax.send();
    ajax.onreadystatechange = function(){
        if(ajax.readyState === 4 && ajax.status === 200){
           return popularSelect(JSON.parse(ajax.responseText));
        }
    }
    function popularSelect($options){
        $options.forEach(element => {
            if($selectValueFromServer != null && $selectValueFromServer.value == element ){
                $select.innerHTML += '<option selected value="' + element + '">' + element + '</option>';
            }
            $select.innerHTML += '<option value="' + element + '">' + element + '</option>';
        });
    }
})(document, window)
