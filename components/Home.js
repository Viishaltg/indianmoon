import React from 'react'
// import Mainimg from '../images/Mainimg.jfif'
import Mencol from '../images/mencollection.jpg'
import Logo from '../images/logo.jpg'
const Home = () => {
  return (
    
    <><div>Radhe Fashion</div>
    <div className="container text-center" style={{position:'relative'}}>
        <div className="row">
            <div className="col-lg-6">
                <h1 className='heading'>The world belongs <br /> to those who can appreciate the traditions.</h1></div>
            <div className="col-lg-6"> <div className="Mainimg">
            <img src='https://i.pinimg.com/564x/f8/da/6a/f8da6a12acc23bf6fee78dbe3d706d46.jpg' alt="" /></div> </div>       
             </div>
            <h1 className='tracking-in-expand-fwd'>The Indian Moon</h1>
    </div>

    <div className="container my-5" style={{position:'relative'}}>
      <div className="row">
      <div className="col-lg-4">
        <div className="abouttext">
          <h2>The Indian Moon</h2>
          <p>The history of Indian dress dates back to the 5th millennium BC, with the Indus Valley civilization that used to spin, weave and dye cotton. The cotton industry was extremely advanced, and some of the techniques used in the past still survive today.</p>
{/* <p>During the Maurya and the Gupta period, people used to wear both stitched and non-stitched clothes, and the main item was the anariya made of white cotton and tied to the waist by a sash. With time, the new trade routes expanded the textile industry of the subcontinent. The Romans bought indigo for dyeing, and trades with China introduced silk textiles.</p> */}
        </div>
      </div>
      <div className="col-lg-8">
        <div className='aboutimg'><img src="https://tallypress.com/wp-content/uploads/2017/10/indian-clothing.jpg" alt="" /></div>
      </div>
      </div>
      <h1 className='abouttextsignanture'>A history created by Maharaja's</h1>
    </div>

<br /><br />
<div className="container-fluid my-5 px-3">
  <div className="row">
    <h1>See Our Collections</h1>
    <div className="col-lg-6">
      <div className="mencollection">
        
        
        <table>
          <tr>
            <td className='img'><img src={Mencol}  alt="" /></td>
          </tr>
        </table>
        
          
      </div>
    </div>
    <div className="col-lg-6">
      <div className="womencollection">
      <table>
          <tr>
            <td className='woimg'><img src='https://i.pinimg.com/564x/35/cf/e9/35cfe9c7059b1bc3104baebada134e6a.jpg'  alt="" /></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>


<br /><br />
<div className="container text-center fotter">
  <h5>Partners We Choose</h5>
  <br /><br />
  <h1>Tag Heuer Longines Baume & Mercier Raymond Weil Liana Vourakis Yannis Sergakis Casato Etho Maria Christina Soubli Montblanc</h1>
  <br />
  <br />
  <img src={Logo} alt="" />
  <br /><br /><br />
  <h4>84, Riga Feraiou Str, New Delhi, India <br />
T. +9100000000   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  E. info@theindianmoon.com
</h4>
</div>

    </>
  )
}

export default Home