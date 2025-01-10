let html = '';

// JSON from json_encode($data)
let json = [
{"category_id":39,"chapters":[{"link":"http:\/\/google.de","chapter_name":"First chapter","price":"5.00","pimg":"msd4"}]},
{"category_id":37,"chapters":[{"link":"http:\/\/google.de","chapter_name":"Second chapter","price":"5.00","pimg":"msd4"}]},
{"category_id":42,"chapters":[{"link":"http:\/\/google.de","chapter_name":"Third chapter","price":"5.00","pimg":"msd4"}]}
];

		json.forEach(function(element) {
		  let category_id = element.category_id;
		  let chapters = element.chapters;
		  
		  console.log(category_id);
		  
		  chapters.forEach(function(chapter) {
		    html += '<a href="'+chapter.link+'">&raquo;Product '+chapter.chapter_name+'</a><span>'+chapter.price+'</span></br>'
			
		    
		    console.log(chapter.link);
		    console.log(chapter.chapter_name);
		  })

		  html += '<br />'
		})

		console.log(html);

		document.getElementById('test').innerHTML = html;