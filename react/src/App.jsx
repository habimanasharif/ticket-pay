/* eslint-disable no-mixed-spaces-and-tabs */
import './App.css'
import Navbar from "./components/Navbar";

function App() {

  	return (
    	<div className=' font-poppins'>
			
			<Navbar />

			<div className="px-16 mt-8">
				<div className="flex flex-col gap-4"> 
					<h1 className=" font-montserrat font-extrabold text-[48px] w-1/2">PAY ALL YOUR <span className=" text-primaryCol">TICKETS</span> AND <span className=" text-primaryCol">FINES</span> IN ONE PLACE ON A GO 🚀 </h1>
					<p className=" w-1/3 text-lg">Settle fines swiftly, click to pay - Your hassle-free solution for resolving police tickets online!</p>
					<button className=" mt-4 w-[120px] bg-primaryCol text-white text-[16px] rounded-lg py-[10px] px-6 hover:scale-110 duration-500">Register</button>
					
				</div>

				<img src="./assets/undraw_mobile_user_re_xta4.svg" alt="" className=" h-[200px] " />

			</div>

    	</div>
  	)
}

export default App
