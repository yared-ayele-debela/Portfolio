import { GiCalendar, GiClawSlashes, GiMailbox, GiMayanPyramid, GiPhone } from "react-icons/gi";
import SocialMedia from "./SocialMedia";
import { useEffect, useState, useRef } from "react";
import axios from "axios";

const Aside = () => {
  const [user, setUser] = useState(() => {
    const savedUser = localStorage.getItem('user');
    return savedUser ? JSON.parse(savedUser) : {};
  });

  const sidebarRef = useRef(null); // Ref for the sidebar

  useEffect(() => {
    const fetchUser = async () => {
      try {
        const response = await axios.get('https://laravel-api.yaredayele.com/api/resume');
        setUser(response.data);
        localStorage.setItem('user', JSON.stringify(response.data));
      } catch (error) {
        console.error('Error fetching user:', error);
      }
    };

    if (!user.fullname) {
      fetchUser();
    }
  }, [user]);

  const elementToggleFunc = (elem) => {
    elem.classList.toggle("active");
  };

  const handleSidebarToggle = () => {
    if (sidebarRef.current) {
      elementToggleFunc(sidebarRef.current);
    }
  };

  return (
    <aside className="sidebar" ref={sidebarRef} data-sidebar>
      <div className="sidebar-info">
        <figure className="avatar-box">
          <img
            src={"/images/profile.jpg"}
            alt="Yared Debela Ayele"
            width="80"
          />
        </figure>

        <div className="info-content">
          <h1 className="name" title="">
            {user.fullname}
          </h1>
          <p className="title">{user.profession}</p>
        </div>

        <button className="info_more-btn" onClick={handleSidebarToggle} data-sidebar-btn>
          <span>Show Contacts</span>
          <GiClawSlashes />
        </button>
      </div>

      <div className="sidebar-info_more">
        <div className="separator"></div>

        <ul className="contacts-list">
          <li className="contact-item">
            <div className="icon-box">
              <GiMailbox />
            </div>

            <div className="contact-info">
              <p className="contact-title">Email</p>

              <a href={`mailto:${user.email}`} className="contact-link">
                {user.email}
              </a>
            </div>
          </li>

          <li className="contact-item">
            <div className="icon-box">
              <GiPhone />
            </div>

            <div className="contact-info">
              <p className="contact-title">Phone</p>

              <a href={`tel:${user.mobile}`} className="contact-link">
                {user.mobile}
              </a>
            </div>
          </li>

          <li className="contact-item">
            <div className="icon-box">
              <GiMayanPyramid />
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
  );
};

export default Aside;
