var mList = {
    SIOSISR : [
        'Abira Raveendran',
        'Angloma Wesley',
        'Anzala Emeric',
        'Bazes Kevin',
        'David Tom',
        'Dos Santos David',
        'El Bana Ashraf',
        'El Hafsi Nizar',
        'Guerin Nicolas',
        'Hasnoui Nassim',
        'Hiaumet Mattéo',
        'Indralingam Inthusan',
        'La Sala Milan',
        'Mathieu Emma',
        'Mendes Joaquim',
        'Yagoubi Nabil',
        'Ye Stéphane'],

    SIOSLAM: [
        'Astasie Mounia',
        'Cisse Adam Bacongo',
        'Drame Mouhamadou',
        'Goubin Sylvain',
        'Mane Malang',
        'Martins Guillaume',
        'Mesina Cristian',
        'Nadji Rayan',
        'Nazir Toycan',
        'Rihane Inès',
        'Sarmiento Nijel',
        'Savoie Adrien',
        'Yangui Amani',
        'Zhang Christophe',]
}


el_parent = document.getElementById("parent_select"); 
el_child = document.getElementById("child_select"); 

for (key in mList) { 
	el_parent.innerHTML = el_parent.innerHTML + '<option>'+ key +'</option>';
}

el_parent.addEventListener('change', function populate_child(e){
	el_child.innerHTML = '';
	itm = e.target.value;
	if(itm in mList){
			for (i = 0; i < mList[itm].length; i++) {
				el_child.innerHTML = el_child.innerHTML + '<option>'+ mList[itm][i] +'</option>';
			}
	}
});