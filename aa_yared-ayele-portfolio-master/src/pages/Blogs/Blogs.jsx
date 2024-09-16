import React, { useEffect, useState } from 'react';
import BlogPost from './BlogPost';
import './Blogs.css'
import axios from 'axios';

const Blogs = () => {
  const [blogs, setBlogs] = useState([]);
  const [currentPage, setCurrentPage] = useState(1);
  const [postsPerPage] = useState(4); 

  useEffect(() => {
    axios.get('https://laravel-api.yaredayele.com/api/blog')
    .then(response => {
      setBlogs(response.data);
      setFilteredProjects(response.data);
    })
    .catch(error => console.error('Error fetching user:', error));
  });


  const indexOfLastPost = currentPage * postsPerPage;
  const indexOfFirstPost = indexOfLastPost - postsPerPage;
  const currentPosts = blogs.slice(indexOfFirstPost, indexOfLastPost);
  const paginate = pageNumber => setCurrentPage(pageNumber);
  return (
    <section className="blog" data-page="blog">
      <header>
        <h2 className="h2 article-title">Blog</h2>
      </header>
      <div className="blog-posts">
        <ul className="blog-posts-list">
          {currentPosts.map((post, index) => (
            <BlogPost
              key={index}
              id={post.id}
              title={post.title}
              date={post.created_at}
              image={`https://laravel-api.yaredayele.com/storage/blogs/${post.image}`}
              description={post.description}
            />
          ))}
        </ul>
      </div>
      {/* Pagination */}
      <nav>
        <ul className="pagination">
          <li className={`page-item ${currentPage === 1 ? 'disabled' : ''}`}>
            <button onClick={() => paginate(currentPage - 1)} className="page-link">
              Previous
            </button>
          </li>
          {Array.from({ length: Math.ceil(blogs.length / postsPerPage) }, (_, index) => (
            <li key={index} className={`page-item ${currentPage === index + 1 ? 'active' : ''}`}>
              <button onClick={() => paginate(index + 1)} className="page-link">
                {index + 1}
              </button>
            </li>
          ))}
          <li className={`page-item ${currentPage === Math.ceil(blogs.length / postsPerPage) ? 'disabled' : ''}`}>
            <button onClick={() => paginate(currentPage + 1)} className="page-link">
              Next
            </button>
          </li>
        </ul>
      </nav>
    </section>
  );
}

export default Blogs;
