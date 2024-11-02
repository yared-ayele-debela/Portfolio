import React, { useEffect, useState } from 'react';
import BlogPost from './BlogPost';
import './Blogs.css';
import axios from 'axios';

const Blogs = () => {
  const [blogs, setBlogs] = useState([]);
  const [currentPage, setCurrentPage] = useState(1);
  const [postsPerPage] = useState(4);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    const fetchBlogs = async () => {
      // Check localStorage for cached blog data
      const cachedBlogs = localStorage.getItem('blogs');
      if (cachedBlogs) {
        setBlogs(JSON.parse(cachedBlogs));
        setLoading(false); // No need to fetch again, just set loading to false
        return;
      }

      try {
        const response = await axios.get('https://laravel-api.yaredayele.com/api/blog');
        setBlogs(response.data);

        // Store the fetched blog data in localStorage
        localStorage.setItem('blogs', JSON.stringify(response.data));
      } catch (err) {
        console.error('Error fetching blogs:', err);
        setError('Could not fetch blogs. Please try again later.');
      } finally {
        setLoading(false);
      }
    };

    fetchBlogs();
  }, []);

  if (loading) {
    return <div>Loading blogs...</div>;
  }

  if (error) {
    return <div>{error}</div>;
  }

  // Pagination Logic
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
          {currentPosts.map((post) => (
            <BlogPost
              key={post.id}
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
};

export default Blogs;
