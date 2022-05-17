import React from 'react'
import Logo from '../images/logo.jpg'

const Navbar = () => {
    
  return (
      <>
      <div className="container-fluid mt-3">
<div className="row">
<div className="col-lg-6"><div className='logo'>
    <img src={Logo} alt="" />
    </div></div>
          <div className="col-lg-6">
              <div className='menu'>
                  <ul className='menubar'>
                      <li><select name="" id="" className='fixed'>
                          <option value="" >Collection</option>
                          <option value="" className='option' >Men Traditional</option>
                          <option value="">Women Traditional</option>
                          <option value="">Festive Collection</option>
                          <option value="">party</option>
                          </select></li>
                      <li>about</li>
                      <li>login</li>
                      <li>signup</li>
                      <li>cart</li>
                  </ul>
                  
              </div>
          </div>
</div>
      </div>
     
      </>  )
}

export default Navbar