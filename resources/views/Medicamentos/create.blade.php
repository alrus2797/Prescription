<script src="{{asset('js/react.js')}}"></script>
<script src="{{asset('js/react-dom.js')}}"></script>
<script src="{{asset('js/babel.min.js')}}"></script>
<script src="{{asset('js/axios.min.js')}}"></script>

<link rel="stylesheet" type="text/css" href="{{asset('css/bulma.min.css')}}">

<div class="container">
<h1 class="title">Crear Medicamento</h1>
<div id="root"></div>
</div>

<script type="text/babel">
class CreateForm extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
        nombre : '',
        mg : '',
        receta : true,
        fechaVenc :'',
        efectoSecundarios :''
    };

    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleSubmit(event){
    var algo;
    axios.post('{{ asset('medicamentos') }}', this.state ).then(function (response) {
    algo = response;
    })
    .catch(function (error) {
    algo= error;
    });

    console.log(algo);
    alert("Request Enviado");

    event.preventDefault();
  }


  handleChange(event) {
    const target = event.target;
    const value = target.type === 'checkbox' ? target.checked : target.value;
    const name = target.name;

    this.setState({
      [name]: value
    });
  }

  render() {
    return (

        <form onSubmit={this.handleSubmit}>

            <div className="field">
            <label className="label">Nombre as</label>
            <p className="control">
            <input className="input" type="text" name="nombre"  value={this.state.nombre} onChange={this.handleChange} />
            </p>
            </div>

            <div className="field">
            <label className="label">Mg</label>
            <p className="control">
            <input className="input" type="number" name="mg" value={this.state.mg} onChange={this.handleChange} />
            </p>
            </div>

            <div className="field">
            <label className="label">Receta</label>
            <p className="control">
            <input className="checkbox" type="checkbox" name="receta"  />
            Receta 
            </p>
            </div>

            <div className="field">
            <label className="label">Fecha de Vencimiento</label>
            <p className="control">
            <input className="date" type="date" name="fechaVenc" value={this.state.fechaVenc} onChange={this.handleChange} />
            </p>
            </div>

            <div className="field">
            <label className="label">Efectos Secundarios</label>
            <p className="control">
            <textarea className="textarea" name="efectoSecundarios" value={this.state.efectoSecundarios} onChange={this.handleChange} />
            </p>
            </div>  

            <div className="field">
            <p className="control">
            <button className="button is-primary">Submit</button>
            </p>
            </div>

        </form>
    );
  }
}

</script>


<script type="text/babel">

	
	const formulario = <CreateForm />;

	ReactDOM.render(
		formulario,
		document.getElementById('root')
  	);
</script>
