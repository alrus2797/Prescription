<script src="{{asset('js/react.js')}}"></script>
<script src="{{asset('js/react-dom.js')}}"></script>
<script src="{{asset('js/babel.min.js')}}"></script>
<script src="{{asset('js/axios.min.js')}}"></script>

Formulario
<div id="root"></div>

<script type="text/babel" src="{{asset('medicamentos/CreateForm.js')}}">
</script>


<script type="text/babel">

	
	const formulario = <CreateForm />;

	ReactDOM.render(
		formulario,
		document.getElementById('root')
  	);
</script>
