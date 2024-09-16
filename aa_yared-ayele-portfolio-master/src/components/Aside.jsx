import { GiCalendar, GiClawSlashes, GiMailbox, GiMayanPyramid, GiPhone } from "react-icons/gi";
import SocialMedia from "./SocialMedia";
import { useEffect, useState } from "react";
import axios from "axios";

const Aside = () => {
  const [user, setUser] = useState([]);

  useEffect(() => {
    axios.get('https://laravel-api.yaredayele.com/api/resume')
    .then(response => setUser(response.data))
    .catch(error => console.error('Error fetching user:', error));
  });
  return (
    <aside className="sidebar">
        <div className="sidebar-info">
          <figure className="avatar-box">
            <img
              src={"/images/profile.jpg"}
              alt="Yared Debela Ayele"
              width="80"
            />
          </figure>

          <div className="info-content">
            <h1 className="name" title="Richard hanrick">
            {user.fullname}
            </h1>

            <p className="title">{user.profession}</p>
          </div>

          <button className="info_more-btn" data-sidebar-btn>
            <span>Show Contacts</span>

            <GiClawSlashes />
          </button>
        </div>

        <div className="sidebar-info_more">
          <div className="separator"></div>

          <ul className="contacts-list">
            <li className="contact-item">
              <div className="icon-box">
                <GiMailbox/>
                
              </div>

              <div className="contact-info">
                <p className="contact-title">Email</p>

                <a href="mailto:richard@example.com" className="contact-link">
                  {user.email}
                </a>
              </div>
            </li>

            <li className="contact-item">
              <div className="icon-box">
                <GiPhone/>
              </div>

              <div className="contact-info">
                <p className="contact-title">Phone</p>

                <a href="tel:+12133522795" className="contact-link">
                  {user.mobile}
                </a>
              </div>
            </li>

           

            <li className="contact-item">
              <div className="icon-box">
                <GiMayanPyramid/>
                <ion-icon name="location-outline"></ion-icon>
              </div>

              <div className="contact-info">
                <p className="contact-title">Location</p>
                <address>{user.location}</address>
              </div>
            </li>
          </ul>

          <div className="separator"></div>
          <SocialMedia />
        </div>
      </aside>
  )
}

export default Aside