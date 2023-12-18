
import { TicketIcon } from "@heroicons/react/24/solid";

const Navbar = () => {
   return (
      <nav className="flex items-center justify-between px-8 py-4">
				<span className=" flex items-center gap-[4px] text-primaryCol text-[36px] font-extrabold">
					<TicketIcon class="h-[36px] w-[36px] " />
					<h1>TicketPay</h1>
				</span>

				<ul className="flex gap-8 font-medium text-lg">
					<li><a href="">Home</a></li>
					<li><a href="">Tickets</a></li>
					<li><a href="">Contact us</a></li>
					<li><a href="">Login</a></li>
					<li><a href="" className=" bg-primaryCol text-white text-[14px] rounded-xl py-[10px] px-6 hover:scale-110">Register</a></li>
				</ul>
		</nav>
   )
}

export default Navbar