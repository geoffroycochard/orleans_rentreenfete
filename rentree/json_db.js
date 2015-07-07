function load_DB (datas) {
	assos = TAFFY(datas);
}

Papa.parse('http://localhost/rentree/datas.csv', {
	download: true,
	header: true,
	complete: function(result)
	{
		load_DB(result.data);
	}
});
