/*function	add_basket()
{
	var count = $(".basket_count").val() + 3;
	var stock = "Basket";
	$(".img_basket").click(function(){
		count++;
		var stockage = $(".basket_count").text(stock + " (" + count + ")");
	    });
}

function	basket_details()
{
    var sum = 0;
    var nb = 1;
    var nbr_el = 1;
    $(".price").each(function() {
	    var val = $.trim($(this).text());
	    if (val)
		{
		    val = parseInt(val.replace(/^Price:/, ""));
		    nbr_el = $("#element" + nb).val();
		    sum = sum + (val * (nbr_el));
		}
	    nb++;
	});
    $(".text_total").text("Total : " + sum + " Cristals");
}

function	basket_count(plus, moins, element, id)
{
    var count = Number($(element).val());
    var stock = $(element).text();
    if (count == 1)
	$(element).text(stock + " (1)");
    $(plus).click(function(){
	    $(plus).attr("style", "border:2px solid green");
	    setTimeout(function (){
		    $(plus).attr("style", "");
		}, 200);
	    var tmp = count + 1;
	    $(element).text(stock + " (" + tmp + ")");
	    $(element).val(tmp);
	    count++;
	    basket_details();
	});
    $(moins).click(function(){
	    $(moins).attr("style", "border:2px solid red");
	    setTimeout(function (){
		    $(moins).attr("style", "");
		}, 200);
	    if (count > 0)
		{
		    $(element).val(count - 1);
		    count--;
		}
	    $(element).text(stock + " (" + count + ")");
	    basket_details();
	});
}*/

function	tri_alpha(categorie)
{
    $("#tri_alpha").click(function() {
	    var element = [];
	    var i = 0;
	    var bool = false;
	    var tab = [];
	    
	    $(".tri").each(function() {
		    element[i] = $(this).text();
		    tab[i] = $(this);
		    i++;
		});
	    
	    var size = element.length;
	    $(categorie).empty();
	    while(!bool)
		{
		    bool = true;
		    for(var i = 0; i < size-1; i++)
			{
			    if(element[i] > element[i+1])
				{
				    var temp = element[i];
				    element[i] = element[i + 1];
				    element[i + 1] = temp;
				    
				    var temp2 = tab[i];
				    tab[i] = tab[i + 1];
				    tab[i + 1] = temp2;
				    bool = false;
				}
			}
		    size--;
		}
	    $(categorie).append(tab);
	});
}

function	tri_price(categorie)
{
    $("#tri_price").click(function(){
	    var element = [];
	    var i = 0;
	    var bool = false;
	    var tab = [];
	    
	    $(".tri").each(function() {
		    element[i] = Number($(this).attr('id'));
		    tab[i] = $(this);
		    i++;
		});
	    
	    var size = element.length;
	    $(categorie).empty();
	    while(!bool)
   	 	{
		    bool = true;
		    for(var i = 0; i < size-1; i++)
			{
			    if(element[i] > element[i+1])
				{
				    var temp = element[i];
				    element[i] = element[i + 1];
				    element[i + 1] = temp;
				    
				    var temp2 = tab[i];
				    tab[i] = tab[i + 1];
				    tab[i + 1] = temp2;
				    bool = false;
				}
			}
		    size--;
		}
	    $(categorie).append(tab);
	});
}

function	plus(a, c)
{
	console.log(".count_plus" + a);
        $(".count_plus" + a).click(function(){
	    var count = prompt("Choisissez le nombre de " + c + " que vous souhaitez avoir dans votre panier (entre 0 et 150)");
	    while (count <= 0 || count >= 150)
		count = prompt("Choisissez le nombre de " + c + " que vous souhaitez avoir dans votre panier (entre 0 et 150)");
	    window.location = "../sql/basket_option.php?nb=" + count + "&name=" +c;
	});
}

function        plus_2(a, c)
{
    console.log(".img_basket" + a);
    $(".img_basket" + a).click(function(){
	var count = prompt("Choisissez le nombre de " + c + " que vous souhaitez avoir dans votre panier (entre 0 et 150)");
	while (count <= 0 || count >= 150)
	    count = prompt("Choisissez le nombre de " + c + " que vous souhaitez avoir dans votre panier (entre 0 et 150)");
	window.location = "../../sql/basket_option.php?nb=" + count + "&name=" +c;
    });
}
