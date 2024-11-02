import axios from 'axios';
import { useState, useEffect } from 'react';
import { FaRegEye } from 'react-icons/fa';
import { Link } from 'react-router-dom';

const Portfolio = () => {
  const [projects, setProjects] = useState(() => {
    const savedProjects = localStorage.getItem('projects');
    return savedProjects ? JSON.parse(savedProjects) : [];
  });

  const [project_category, setProjectCategory] = useState(() => {
    const savedCategories = localStorage.getItem('project_category');
    return savedCategories ? JSON.parse(savedCategories) : [];
  });

  const [selectedCategory, setSelectedCategory] = useState('All');
  const [filteredProjects, setFilteredProjects] = useState(projects);

  useEffect(() => {
    const fetchProjects = async () => {
      try {
        const projectsResponse = await axios.get('https://laravel-api.yaredayele.com/api/projects');
        const categoriesResponse = await axios.get('https://laravel-api.yaredayele.com/api/project_category');

        setProjects(projectsResponse.data);
        setProjectCategory(categoriesResponse.data);
        setFilteredProjects(projectsResponse.data);

        // Save to localStorage
        localStorage.setItem('projects', JSON.stringify(projectsResponse.data));
        localStorage.setItem('project_category', JSON.stringify(categoriesResponse.data));
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    };

    // Fetch data only if projects or categories are empty
    if (projects.length === 0 || project_category.length === 0) {
      fetchProjects();
    }
  }, [projects.length, project_category.length]);

  const handleFilterClick = (category) => {
    setSelectedCategory(category);
    if (category === 'All') {
      setFilteredProjects(projects);
    } else {
      const filtered = projects.filter(project => project.category === category);
      setFilteredProjects(filtered);
    }
  };

  return (
    <section className="portfolio" data-page="portfolio">
      <header>
        <h2 className="h2 article-title">Portfolio</h2>
      </header>

      <ul className="filter-list">
        {project_category.map(category => (
          <li className="filter-item" key={category.id}>
            <button
              className={category.name === selectedCategory ? 'active' : ''}
              onClick={() => handleFilterClick(category.name)}
              data-filter-btn
            >
              {category.name}
            </button>
          </li>
        ))}
      </ul>

      {/* Portfolio items */}
      <section className="projects">
        <ul className="project-list">
          {filteredProjects.map(project => (
            <Link to={`/projects/${project.id}`} key={project.id}>
              <li
                className="project-item active"
                data-filter-item
                data-category={project.category}
              >
                <a href="#">
                  <figure className="project-img">
                    <div className="project-item-icon-box">
                      <FaRegEye />
                    </div>
                    <img
                      src={`https://laravel-api.yaredayele.com/storage/projects/${project.cover_image}`}
                      alt={project.title}
                      loading="lazy"
                    />
                  </figure>
                  <h3 className="project-title">{project.title}</h3>
                  <p className="project-category">{project.category}</p>
                </a>
              </li>
            </Link>
          ))}
        </ul>
      </section>
    </section>
  );
};

export default Portfolio;
