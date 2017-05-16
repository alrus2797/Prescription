class CreateForm extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
        nombre : 'fdsa',
        mg : 'asfd',
        receta : '',
        fechaVenc :'adf',
        efectoSecundarios :'asfd'
    };

    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleSubmit(event){

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
            <input className="input" type="number" name="mg" />
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
            <input className="date" type="date" name="fechaVenc" />
            </p>
            </div>

            <div className="field">
            <label className="label">Efectos Secundarios</label>
            <p className="control">
            <textarea className="textarea" name="efectoSecundarios"  />
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
