<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <script src="https://cdn.tailwindcss.com"></script>

   <title>TicketPay</title>
</head>
<body>
   
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

   <div className=" flex px-16 mt-8">
      <div className="flex flex-col gap-4"> 
         <h1 className=" font-montserrat font-extrabold text-[48px] w-1/2">PAY ALL YOUR <span className=" text-primaryCol">TICKETS</span> AND <span className=" text-primaryCol">FINES</span> IN ONE PLACE ON A GO 🚀 </h1>
         <p className=" w-1/3 text-lg">Settle fines swiftly, click to pay - Your hassle-free solution for resolving police tickets online!</p>
         <button className=" mt-4 w-[120px] bg-primaryCol text-white text-[16px] rounded-lg py-[10px] px-6 hover:scale-110 duration-500">Register</button>
         
      </div>

      <img src="./assets/undraw_mobile_user_re_xta4.svg" alt="" className=" h-[200px] " />

	</div>

</body>
</html>